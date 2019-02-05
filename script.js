// $(function() {
//   $( "#button" ).click(function() {
//     $( "#button" ).addClass( "onclic", 250, validate);
//   });

//   function validate() {
//     setTimeout(function() {
//       $( "#button" ).removeClass( "onclic" );
//       $( "#button" ).addClass( "validate", 450, callback );
//     }, 2250 );
//   }
//     function callback() {
//       setTimeout(function() {
//         $( "#button" ).removeClass( "validate" );
//       }, 1250 );
//     }
// });

let productCard = document.querySelector('.productCard');

productCard.addEventListener('click', function(){

  // this.style.backgroundColor = 

});

class Listener {
  constructor( photo, name, price, id = NULL ){
    
    this.photo = photo;
    this.name = name;
    this.price = price;
    this.id = id;

    this.set = false;

    this.element = document.querySelector('.catalog');
  }
  turneOn(){

  }
  turneOff(){

  }
  renderHTMLElement(){
    this.element.innerHTML = `

      <div class='productCard'>
        <img src='${this.photo}' class='productCard-photo'>
        <p class='productCard-name' id='name'>${this.name}</p>
        <div class='productCard-price'>Цена: ${this.price}</div>
      </div>
    
    `;
    
    return this.element
  }
}


