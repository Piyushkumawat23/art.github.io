// var btn_up = document.querySelector('.btn-up');
// var btn_down = document.querySelector('.btn-down');
var btn_up = document.querySelector('.btn-up');
var btn_down = document.querySelector('.btn-down');

var cart1 = document.getElementById('cart1')

var list1 = document.querySelector('.list1')
var list2 = document.querySelector('.list2')
var list3 = document.querySelector('.list3')
var list4 = document.querySelector('.list4')
var list5 = document.querySelector('.list5')
var list6 = document.querySelector('.list6')
var list7 = document.querySelector('.list7')
var list8 = document.querySelector('.list8')

var home = document.getElementById('home')
var bird = document.getElementById('bird')
var flower = document.getElementById('flower')
var animal = document.getElementById('animal')
var feature = document.getElementById('feature')
var latest = document.getElementById('latest')
var account = document.getElementById('Account')
var footer = document.getElementById('footer')


var item1 = document.getElementById('item1')
var item2 = document.getElementById('item2')
var item3 = document.getElementById('item3')
var item_birds1 = document.getElementById('item_birds1')
var item_birds2 = document.getElementById('item_birds2')
var item_birds3 = document.getElementById('item_birds3')
var item_birds4 = document.getElementById('item_birds4')
var stamp_paper1 = document.getElementById('stamp_paper1')
var stamp_paper2 = document.getElementById('stamp_paper2')
var stamp_paper3 = document.getElementById('stamp_paper3')
var stamp_paper4 = document.getElementById('stamp_paper4')
var birds_paper1 = document.getElementById('birds_paper1')
var birds_paper2 = document.getElementById('birds_paper2')
var birds_paper3 = document.getElementById('birds_paper3')
var birds_paper4 = document.getElementById('birds_paper4')


function btn_down1(img_slider){
    var img_slider1 = document.getElementById(img_slider)
    
    // alert('df')
    img_slider1.style.marginTop = '-231px'
    btn_up.style.display = 'block'
    btn_down.style.display = 'none'

}


function btn_up1(img_slider){
    var img_slider1 = document.getElementById(img_slider)
   
    // alert('df')
    img_slider1.style.marginTop = '16px'
    btn_up.style.display = 'none'
    btn_down.style.display = 'block'
}


function cart(){
    alert('Succesfully Added Your Product')
    
    var content = document.getElementById('content').values
    cart1.innerHTML = 'Hello'
   

}

// nav bar 

function list11(){
    list2.classList.remove('active')
    list1.classList.add('active')
    list3.classList.remove('active')
    list4.classList.remove('active')
    list5.classList.remove('active')
    list6.classList.remove('active')
    list7.classList.remove('active')
    list8.classList.remove('active')

    home.style.display = 'block'
    bird.style.display = 'block'
    flower.style.display = 'block'
    animal.style.display = 'block'
    feature.style.display = 'block'
    latest.style.display = 'block'
    account.style.display = 'block'
    footer.style.display = 'block'

    item1.style.display ='none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'none'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none' 
}

function list12(){
    list1.classList.remove('active')
    list2.classList.add('active')
    list3.classList.remove('active')
    list4.classList.remove('active')
    list5.classList.remove('active')
    list6.classList.remove('active')
    list7.classList.remove('active')
    list8.classList.remove('active')


    home.style.display = 'block'
    bird.style.display = 'block'
    flower.style.display = 'block'
    animal.style.display = 'block'
    feature.style.display = 'block'
    latest.style.display = 'block'
    account.style.display = 'block'
    footer.style.display = 'block'

    item1.style.display ='none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'none'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'



}

function list13(){
    list1.classList.remove('active')
    list3.classList.add('active')
    list2.classList.remove('active')
    list4.classList.remove('active')
    list5.classList.remove('active')
    list6.classList.remove('active')
    list7.classList.remove('active')
    list8.classList.remove('active')

    home.style.display = 'block'
    bird.style.display = 'block'
    flower.style.display = 'block'
    animal.style.display = 'block'
    feature.style.display = 'block'
    latest.style.display = 'block'
    account.style.display = 'block'
    footer.style.display = 'block'

    item1.style.display ='none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'none'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'


}

function list14(){
    list1.classList.remove('active')
    list4.classList.add('active')
    list3.classList.remove('active')
    list2.classList.remove('active')
    list5.classList.remove('active')
    list6.classList.remove('active')
    list7.classList.remove('active')
    list8.classList.remove('active')

    home.style.display = 'block'
    bird.style.display = 'block'
    flower.style.display = 'block'
    animal.style.display = 'block'
    feature.style.display = 'block'
    latest.style.display = 'block'
    account.style.display = 'block'
    footer.style.display = 'block'

    item1.style.display ='none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'none'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'

}
function list17(){
    list1.classList.remove('active')
    list7.classList.add('active')
    list3.classList.remove('active')
    list4.classList.remove('active')
    list2.classList.remove('active')
    list6.classList.remove('active')
    list5.classList.remove('active')
    list8.classList.remove('active')

    home.style.display = 'block'
    bird.style.display = 'block'
    flower.style.display = 'block'
    animal.style.display = 'block'
    feature.style.display = 'block'
    latest.style.display = 'block'
    account.style.display = 'block'
    footer.style.display = 'block'

    item1.style.display ='none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'none'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'


}

function list18(){
    list1.classList.remove('active')
    list8.classList.add('active')
    list3.classList.remove('active')
    list4.classList.remove('active')
    list2.classList.remove('active')
    list6.classList.remove('active')
    list7.classList.remove('active')
    list5.classList.remove('active')

    home.style.display = 'block'
    bird.style.display = 'block'
    flower.style.display = 'block'
    animal.style.display = 'block'
    feature.style.display = 'block'
    latest.style.display = 'block'
    account.style.display = 'block'
    footer.style.display = 'block'

    item1.style.display ='none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'none'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'

}

function list15(){
    list1.classList.remove('active')
    list5.classList.add('active')
    list3.classList.remove('active')
    list4.classList.remove('active')
    list2.classList.remove('active')
    list6.classList.remove('active')
    list7.classList.remove('active')
    list8.classList.remove('active')

    home.style.display = 'block'
    bird.style.display = 'block'
    flower.style.display = 'block'
    animal.style.display = 'block'
    feature.style.display = 'block'
    latest.style.display = 'block'
    account.style.display = 'block'
    footer.style.display = 'block'

    item1.style.display ='none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'none'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'

}

function list16(){
    list1.classList.remove('active')
    list6.classList.add('active')
    list3.classList.remove('active')
    list4.classList.remove('active')
    list5.classList.remove('active')
    list2.classList.remove('active')
    list7.classList.remove('active')
    list8.classList.remove('active')

    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'
    latest.style.display = 'none'
    account.style.display='none'


    item1.style.display ='none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'none'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'

}


// product 

function items1(){
    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'

    item1.style.display = 'block'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'none'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'}

function items2(){
    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'


    item1.style.display = 'none'
    item2.style.display = 'block'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'none'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'
}

function items3(){
    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'


    item1.style.display = 'none'
    item2.style.display = 'none'
    item3.style.display = 'block'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'none'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'
}


function items4(){
    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'


    item1.style.display = 'none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'block'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'none'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'
}
function items5(){
    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'


    item1.style.display = 'none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'block'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'none'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'
}
function items6(){
    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'


    item1.style.display = 'none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'block'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'none'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'
}
function items7(){
    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'


    item1.style.display = 'none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'block'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'none'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'
}
function items8(){
    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'


    item1.style.display = 'none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'block'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'none'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'
}
function items9(){
    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'


    item1.style.display = 'none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'block'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'none'
 
}
function items10(){
    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'


    item1.style.display = 'none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'block'
    stamp_paper4.style.display = 'none'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'
}
function items11(){
    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'


    item1.style.display = 'none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'block'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'
}
function items12(){
    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'


    item1.style.display = 'none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'none'
    birds_paper1.style.display = 'block' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'
}
function items13(){
    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'


    item1.style.display = 'none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'none'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'block' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'
}
function items14(){
    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'


    item1.style.display = 'none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'none'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'block' 
    birds_paper4.style.display = 'none'
}
function items15(){
    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'


    item1.style.display = 'none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'none'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'block'
}
function items16(){
    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'


    item1.style.display = 'none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'block'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'
}
function items17(){
    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'


    item1.style.display = 'none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'block'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'
}
function items18(){
    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'


    item1.style.display = 'none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'block'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'
}
function items19(){
    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'


    item1.style.display = 'none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'block'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'
}
function items20(){
    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'


    item1.style.display = 'none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'block'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'
}
function items21(){
    home.style.display = 'none'
    bird.style.display = 'none'
    flower.style.display = 'none'
    animal.style.display = 'none'
    feature.style.display = 'none'


    item1.style.display = 'none'
    item2.style.display = 'none'
    item3.style.display = 'none'
    item_birds1.style.display = 'none'
    item_birds2.style.display = 'none'
    item_birds3.style.display = 'none'
    item_birds4.style.display = 'none'
    stamp_paper1.style.display = 'none'
    stamp_paper2.style.display = 'none'
    stamp_paper3.style.display = 'none'
    stamp_paper4.style.display = 'block'
    birds_paper1.style.display = 'none' 
    birds_paper2.style.display = 'none' 
    birds_paper3.style.display = 'none' 
    birds_paper4.style.display = 'none'
}
// cart 
var addItemId = 0;
var addItemId1 = 0;
var cartnum = document.getElementById('cartnum')
var counter = 0;
function cart(item){
    addItemId +=0;
    addItemId1 +=0;
    counter = counter+1;
    cartnum.innerText = counter;
    console.log(addItemId)
    var selectedItem = document.createElement('div');
    selectedItem.classList.add('cartImg')
    selectedItem.setAttribute('id',addItemId);
    var img = document.createElement('img');
    img.setAttribute('src', item.children[0].currentSrc);
    var title = document.createElement('h1')
    title.innerText = item.children[1].innerText
    var label = document.createElement('h2')
    label.innerText = item.children [2].children[0].innerText;
    var select = document.createElement('span')
    select.innerText = item.children [2].children[1].innerText;
    label.append(select);
    var delBtn = document.createElement('button')
    delBtn.innerText = 'Delete'
    delBtn.setAttribute('onclick' , 'del('+addItemId+')')

    var payBtn = document.createElement('button')
    payBtn.innerText = innerText = 'Buy Now'
    payBtn.setAttribute('id', 'payBtn1')
    payBtn.setAttribute('onclick' , 'payment('+addItemId+')')


    var cartItems = document.getElementById('title')
    selectedItem.append(img);
    selectedItem.append(title);
    selectedItem.append(label)
    selectedItem.append(delBtn)
    selectedItem.append(payBtn)
    cartItems.append(selectedItem)
}


function del(item){
    document.getElementById(item).remove()
    counter = counter-1;
    cartnum.innerText = counter;


}

function payment(){
    confirm('Do You Want To Pay')

    location .href = 'payment.html'
}
// var selectedItem = document.createElement('div');
//     selectedItem.classList.add('cartImg')
//     selectedItem.setAttribute('id',addItemId);
//     var img = document.createElement('img');
//     img.setAttribute('src', item.children[0].currentSrc);
//     var title = document.createElement('div')
//     title.innertext = item.children[1].innerText
//     var label = document.createElement('div')
//     label.innerText = item.children [2].children[0].innerText;
//     var select = document.createElement('span')
//     select.innerText = item.children[2].children[1].value;
//     label.append(select);
//     var cartItems = document.getElementById('title')
//     selectedItem.append(img);
//     selectedItem.append(title)
//     selectedItem.append(label)
//     cartItems.append(selectedItem)