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
            console.log("Raw Response:", result);

            const jsonResponse = JSON.parse(result);

            if (jsonResponse.status === 'success') {
                alert(jsonResponse.message);
                setTimeout(() => {
                    window.location = "/";
                }, 200);
            } else {
                responseDiv.innerHTML = `<p style="color:red">${jsonResponse.message}</p>`;
            }
        } catch (error) {
            responseDiv.innerHTML = `<p style="color:red">Error: ${error.message}</p>`;
        }
    });
});
