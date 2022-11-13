let noti = document.querySelector('h3');
let select = document.querySelector('.select');
let button = document.getElementsByTagName('button');
for(let but of button){
    but.addEventListener('click',(e) =>{
        let add = Number(noti.getAttribute('data-count1')||0);
        noti.setAttribute('data-count1',add + 1);
        noti.classList.add('zero');

        //image --animation to cart
        var image = e.target.parentNode.querySelector('img');
        var span = e.target.parentNode.querySelector('span');
        var s_image = image.cloneNode(false);
        span.appendChild(s_image);
        span.classList.add('active');
        setTimeout(() =>{
            span.classList.remove('active');
            span.removeChild(s_image);
        },500)

        //copy and past
        var parent = e.target.parentNode;
        var clone = parent.cloneNode(true);
        select.appendChild(clone);
        clone.lastElementChild.innerText = "By-now";
        if(clone){
            noti.onclick =()=>
            {
                select.classList.toggle("display");
            }
        }
    })
}