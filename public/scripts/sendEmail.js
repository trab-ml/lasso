document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('emailForm').addEventListener('submit', async function (e) {
        e.preventDefault();

        const formData = new FormData(this);
        const responseDiv = document.getElementById('response');

        try {
            const response = await fetch('send', {
                method: 'POST',
                body: formData
            });
            const result = await response.text();
            const jsonResponse = JSON.parse(result);

            if (jsonResponse.status !== 'success') {
                responseDiv.innerHTML = `<p style="color:red">${jsonResponse.errors}</p>`;
                return;
            }

            alert(jsonResponse.message);
            const returnUrl = formData.get('returnUrl');
            setTimeout(() => {
                window.location.href = returnUrl || document.referrer || './';
            }, 100);
        } catch (error) {
            responseDiv.innerHTML = `<p style="color:red">Error: ${error.message}</p>`;
        }
    });
});
