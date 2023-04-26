const cardTexts = {
  
  //Oração Reunidos em nome do Pai
  "btn1": {
    "titulo": "Reunidos em nome do Pai",
    "descricao": `<p class= 'p1'>Reunidos em nome do Pai<br>
        Reunidos em nome do Filho<br>
        Reunidos em nome do Espirito Santo<br>
        Amem!<br>
        A tristeza la fora deixei<br>
        A alegria aqui dentro encontrei<br>                       
        Cristo vivo esta aqui em meu coração!</p>`
  },
  //FIM;


  //Oração Pai nosso
  "btn2": {
    "titulo": "Oração pai nosso",
    "descricao": `<p class= 'p1'>Pai Nosso que estais no céu, <br>
          santificado seja o vosso nome, <br>
          vem a nós o vosso reino, <br>
          seja feita a vossa vontade <br>
          assim na terra como no céu. <br>
          O pão nosso de cada dia nos daí hoje, <br>
          perdoai-nos as nossas ofensas, <br>
          assim como nós perdoamos a quem nos tem ofendido, <br>
          não nos deixei cair em tentação mas livrai-nos do mal.<br>
          Amém.</p>`
  },
  //FIM;

  //Oração Ave Maria
  "btn3": {
    "titulo": "Oração Ave Maria",
    "descricao": `<p class= 'p1'> Ave Maria, cheia de graça, <br>
          o Senhor é convosco,<br> 
          bendita sois Vós entre as mulheres,<br> 
          bendito é o fruto em Vosso ventre, Jesus.<br>
          Santa Maria Mãe de Deus, rogai por nós, os pecadores,<br> 
          agora e na hora da nossa morte. Amém.</p>`
  },
  //FIM;

  //Oração Cruz Sagrada Seja Minha Luz
  "btn4": {
    "titulo": "Cruz Sagrada Seja Minha Luz",
    "descricao": `<p class= 'p1'>A Cruz Sagrada seja minha luz,<br>
        não seja o dragão meu guia, retira-te satanás,<br>
        nunca me aconselhe coisas vãs,<br>
        é mau que tu me ofereces,<br>
        bebe tu mesmo do teu veneno.</p>`
  },
  //FIM;

  //Oração São Miguel Arcanjo
  "btn5": {
    "titulo": "São Miguel Arcanjo",
    "descricao": `<p class='p1'>São Miguel Arcanjo, defendei-nos no combate, <br>
    sede nosso refúgio contra a maldade e as ciladas do demônio! <br>
    Ordene-lhe Deus, instantemente o pedimos; e vós, príncipe da <br>
    milícia celeste, pela virtude divina, precipitai ao inferno <br>
    a Satanás e a todos os espíritos malignos, que andam pelo mundo <br>
    para perder as almas. Amém.</p>`
  },
  //FIM;

  //Senhor Deus do Universo (Hosana)
  "btn6": {
    "titulo": "Hosana nas Alturas",
    "descricao": `<p class='p1'>Santo, Santo, Santo! <br>
    Senhor Deus do universo <br>
    O céu e a terra proclamam <br>
    A vossa glória! <br>
    Hosana nas alturas, Hosana <br>
    Hosana nas alturas, Hosana <br>
    Bendito aquele que vem <br>
    Em nome do Senhor <br>
    Bendito aquele que vem <br>
    Em nome do Senhor <br>
    Hosana nas alturas, Hosana <br>
    Hosana nas alturas, Hosana</p>`
  },
  //FIM

};

const botoespermitidos = ["btn1", "btn2", "btn3", "btn4", "btn5", "btn6"];

const btns = document.querySelectorAll("button");
const cardContainer = document.getElementById("card-container");
const cardText = document.getElementById("card-text");
const closeBtn = document.getElementById("close-btn");



btns.forEach(btn => {
  if (botoespermitidos.includes(btn.id)) {
    btn.addEventListener("click", function () {
      cardContainer.classList.add("show");
      cardContainer.style.display = "block";
      cardText.innerHTML = cardTexts[btn.id].titulo;
      cardText.innerHTML = cardTexts[btn.id].descricao;
      document.body.style.overflow = "hidden";
    });
  }
});

closeBtn.addEventListener("click", function () {
    cardContainer.classList.remove("show");
    cardContainer.style.display = "none";
    document.body.style.overflow = "auto";
});

//Fechar o card apertando o esq
  document.addEventListener("keydown", function(event) {
  if(event.key === "Escape") {
    cardContainer.classList.remove("show");
    cardContainer.style.display = "none";
    document.body.style.overflow = "auto";
  }
})




