

let btn1 = document.getElementById('call1');
let btn2 = document.getElementById('call2');
let btn3 = document.getElementById('call3');
let btn4 = document.getElementById('call4');


let c1 = document.getElementById('card1');
let c2 = document.getElementById('card2');
let c3 = document.getElementById('card3');
let c4 = document.getElementById('card4');



btn1.addEventListener('click', ()=> {

c1.style.display != 'none' ? c1.style.display = 'block' : c1.style.display = 'block'


btn1.style.backgroundColor = 'rgb(46, 49, 146)'
btn1.style.color = 'white'

btn2.style.backgroundColor = 'rgb(248, 248, 248)'
btn2.style.color = 'black'
btn3.style.backgroundColor = 'rgb(248, 248, 248)'
btn3.style.color = 'black'
btn4.style.backgroundColor = 'rgb(248, 248, 248)'
btn4.style.color = 'black'



c2.style.display = 'none' 
c3.style.display = 'none' 
c4.style.display = 'none' 
})

btn2.addEventListener('click', ()=> {
  c2.style.display != 'none' ? c2.style.display = 'block' : c2.style.display = 'block'

  btn2.style.backgroundColor = 'rgb(46, 49, 146)'
  btn2.style.color = 'white'

  btn1.style.backgroundColor = 'rgb(248, 248, 248)'
btn1.style.color = 'black'
btn3.style.backgroundColor = 'rgb(248, 248, 248)'
btn3.style.color = 'black'
btn4.style.backgroundColor = 'rgb(248, 248, 248)'
btn4.style.color = 'black'

  c1.style.display = 'none' 
  c3.style.display = 'none' 
  c4.style.display = 'none' 
  })

btn3.addEventListener('click', ()=> {
    c3.style.display != 'none' ? c3.style.display = 'block': c3.style.display = 'block'
    btn3.style.backgroundColor = 'rgb(46, 49, 146)'
    btn3.style.color = 'white'

btn1.style.backgroundColor = 'rgb(248, 248, 248)'
btn1.style.color = 'black'
btn2.style.backgroundColor = 'rgb(248, 248, 248)'
btn2.style.color = 'black'
btn4.style.backgroundColor = 'rgb(248, 248, 248)'
btn4.style.color = 'black'


    c1.style.display = 'none' 
    c2.style.display = 'none' 
    c4.style.display = 'none' 
    })

btn4.addEventListener('click', ()=> {
      c4.style.display != 'none' ? c4.style.display = 'block' : c4.style.display = 'block'
      btn4.style.backgroundColor = 'rgb(46, 49, 146)'
      btn4.style.color = 'white'

btn1.style.backgroundColor = 'rgb(248, 248, 248)'
btn1.style.color = 'black'
btn2.style.backgroundColor = 'rgb(248, 248, 248)'
btn2.style.color = 'black'
btn3.style.backgroundColor = 'rgb(248, 248, 248)'
btn3.style.color = 'black'

      c1.style.display = 'none' 
      c2.style.display = 'none' 
      c3.style.display = 'none' 
      })
