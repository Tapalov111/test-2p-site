window.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");

    function req(e)
    {
        e.preventDefault();

        let formData = new FormData(form);

        let obj = {};
        formData.forEach( (value,key) => {
            obj[key] = value;
        } );

        let json = JSON.stringify(obj);

        const request = new XMLHttpRequest();
        request.open("POST","/api/create");
        // request.setRequestHeader("Content-type","multipart/form-data");
        request.send(formData); 
        request.addEventListener("load", function(){
            if(request.status == 200)
            {
                // let data = JSON.parse(request.response);

                console.log(request.response);
                // createCards(data);

            } else {
                console.error("Не боп кеттi");
            }
        })
        
        getResource("/api/create", formData)
            .then(data => console.log(data))
            .catch(err => console.error(err));

        axios.post("/api/create",obj);

        // this.remove();
    };

    async function getResource(url,data)
    {
        const res = await fetch(`${url}`,{
            method: "POST",
            body: data,
        });
        
        if(!res.ok) // Проверка ошибок
        {
            throw new Error (`Не боп кеттi мында ${url}, status: ${res.status}`);
        }
        
        return await res.text();
    }

    // async function getResource(url)
    // {
    //     const res = await axios(`${url}`);
        
    //     if(res.status !== 200) // Проверка ошибок
    //     {
    //         throw new Error (`Не боп кеттi мында ${url}, status: ${res.status}`);
    //     }
        
    //     return await res;
    // }

    function createCards(response)
    {

        response.forEach(item => {
            let card = document.createElement('div');

            card.classList.add('card');
            card.innerHTML = `
                <div class="name">${item.text}</div>
            `;
            document.querySelector('.app').appendChild(card);
        });
    }

    form.addEventListener("submit", (e) => req(e), );

});