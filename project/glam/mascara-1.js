
// ============================= change img ===============================

function changeImage(imageSrc) {
    document.getElementById('MainImg').src = imageSrc;
  }




// ===============================like button =============================
let Lbtn1 = document.querySelector('.like_button1');
function Toggle1(){
    if(Lbtn1.style.color == "red"){
        Lbtn1.style.color = "black"
    }
    else{
        Lbtn1.style.color = "red"
    }
    
}


let Lbtn2 = document.querySelector('.like_button2');
function Toggle2(){
    if(Lbtn2.style.color == "red"){
        Lbtn2.style.color = "black"
    }
    else{
        Lbtn2.style.color = "red"
    }
    
}

let Lbtn3 = document.querySelector('.like_button3');
function Toggle3(){
    if(Lbtn3.style.color == "red"){
        Lbtn3.style.color = "black"
    }
    else{
        Lbtn3.style.color = "red"
    }
    
}

let Lbtn4 = document.querySelector('.like_button4');
function Toggle4(){
    if(Lbtn4.style.color == "red"){
        Lbtn4.style.color = "black"
    }
    else{
        Lbtn4.style.color = "red"
    }
    
}


// ========================= search bar ======================

const cosmeticProducts = [
  { name: 'Lipstick', link: 'lipstick-1.php' },
  { name: 'Liquid lipstick', link: 'liquid-lip-1.php' },
  { name: 'Lipliner', link: 'lip-liner-1.php' },
  { name: 'kajal', link: 'kajal-2.php' },
  { name: 'eyeliner', link: 'eyeliner-1.php' },
  { name: 'Mascara', link: 'mascara-2.php' },
  { name: 'Blush', link: 'blush-1.php' },
  { name: 'Liquid blush', link: 'liquid-blush-1.php' },
  { name: 'foundation', link: 'foundation-1.php' },
  { name: 'serum', link: 'serum-1.php' },
];

const searchInput = document.getElementById('searchInput');
const resultsList = document.getElementById('resultsList');

function performCosmeticSearch() {
  const searchTerm = searchInput.value.toLowerCase();
  const filteredResults = cosmeticProducts.filter(product => product.name.toLowerCase().includes(searchTerm));

  // Clear previous results
  resultsList.innerHTML = '';

  // Display filtered results with links
  filteredResults.forEach(result => {
    const listItem = document.createElement('li');
    const link = document.createElement('a');
    link.href = result.link;
    link.textContent = result.name;
    listItem.appendChild(link);
    resultsList.appendChild(listItem);
  });

  // Show or hide the results list based on search results
  resultsList.style.display = filteredResults.length > 0 ? 'block' : 'none';
}

function showList() {
  resultsList.style.display = 'block';
}

// Event listener for the input field
searchInput.addEventListener('input', performCosmeticSearch);

// Event listener to hide the list when clicking outside the search container
document.addEventListener('click', function (event) {
  var searchContainer = document.querySelector('.search');
  if (!searchContainer.contains(event.target)) {
    resultsList.style.display = 'none';
  }
});

  
  
  