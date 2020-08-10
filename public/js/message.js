window.addEventListener("DOMContentLoaded", () => {
    
    const form = document.getElementById('form'); //Находим форму отправки сообщения
    form.addEventListener("submit", (e) => req(e),);// Функция запускаеться при нажатии на отправить 
    
    function req(e)
    {
        e.preventDefault();

        let formData = new FormData(form);
        

        let obj = {};   

        formData.forEach((value, key) => {  // Присваиваем обьекту obj значения формы 
            obj[key]    = value;
        });

        let json = JSON.stringify(obj); //Преобразуем obj в json формат
        
    
        const request = new XMLHttpRequest();
        request.open("POST",'/api/message/store');
        request.setRequestHeader("Content-Type", "application/json; charset=utf-8");
        request.send(json);
        request.addEventListener("load", function() {
            if (request.status == 200)
            {
                createMessageLi(obj.text,'right');
            } else {
                console.error('Не боп кеттi');
            }
        });

        form.text.value = ''; //Присваиваем инпуту пустое значение
        
        setTimeout(scrollToBottom, 1000);   //Скорил вниз после создания сообщения
    
    }
    
    function scrollToBottom()
    {
        let height = document.getElementById('messageC').scrollHeight;
        height += 200;
        document.getElementById('messageC').scrollTo(0,height);
    }


    async function  getMessageReceived()
    {
        let formData = new FormData(form);
        

        let obj = {};   

        formData.forEach((value, key) => {  // Присваиваем обьекту obj значения формы 
            obj[key]    = value;
        });

        let json = JSON.stringify(obj); //Преобразуем obj в json формат

        const res = await fetch('/api/message/getReceived',{
            method: "POST",
            headers:{
                "Content-Type": "application/json"
            },
            body: json,
        })
        .then(data => data.json());

        if(res.length !== 0)
        {
            res.forEach((value,key) => {
                createMessageLi(value.text,'left');
            });
        }


    scrollToBottom();
    }

    function createMessageLi(message,where)
    {
        let send = document.createElement('div');

        let color;
        if(where == 'right')
        {
            color = '#81c4f9';
        } else {
            color = '#b2b2b2';
        }

        send.innerHTML = `
            <li style="text-align:${where};padding: 2px;position:relative;cursor: pointer;">
                <span style="max-width: 200px;border-radius: 5px;padding:12px;display:inline-block;background-color: ${color};">
                ${message}
                </span>
            </li>
        `;
        document.querySelector('.app').appendChild(send);
    }


    scrollToBottom();
    setInterval(getMessageReceived, 3000);
});