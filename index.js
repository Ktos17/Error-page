const home = document.querySelector('.joisdf-sdafmno3-sdfno3');

home.addEventListener('click',() => {
    home.style.color = '#fff';
    setTimeout(() => {
        home.style.color = '#bdc5ca';
    }, 300)
});

const guides = document.querySelector('.naisd-3niaosd-3niawsd-3nioasd');

guides.addEventListener('click', () => {
    guides.style.color = '#fff';
    setTimeout(() => {
        guides.style.color = '#bdc5ca';
    }, 300);
});

const pricing = document.querySelector('.nioadsf-3nasd-3nas-dn3iasd');

pricing.addEventListener('click', () => {
    pricing.style.color = '#fff';
    setTimeout(() => {
        pricing.style.color = '#bdc5ca';
    }, 300);
});

const img = document.getElementById('bjxcv-2nbasd-nasd');
/*
document.addEventListener('DOMContentLoaded', () => {
    setTimeout(() => {
        console.log('teraz film zmieni sie na zdjecie');
        img.style.transition = 'all 1s ease-in-out';
        img.style.display = 'block';
        img.style.height = '90px';
        img.style.width = '300px';
        img.classList.add('.bnxcv-23bjasd-2nasd');
    }, 1200);
});

*/

const theme = document.querySelector('.nkxzc-bnmxzbxhcmv-asjd-asjd');

let counter = 1;

theme.addEventListener('click', () => {
    counter ++;
    console.log(counter);

    if (counter === 2) {
        document.querySelector('.nias-d2niasd-nicx-qwnifsad').style.display = 'block';
        counter = 0;
    } else {
        document.querySelector('.nias-d2niasd-nicx-qwnifsad').style.display = 'none';
        counter = 1;
    }
});



const lightMode = document.querySelector('.niasd02nisa02-asbud2-asbdu');
const container = document.querySelector('.container');
const sidebar = document.querySelector('.a');
const firstDivTop = document.querySelector('.joisdf-sdafmno3-sdfno3');
const secondDivTop = document.querySelector('.naisd-3niaosd-3niawsd-3nioasd');
const thirdDivTop = document.querySelector('.nioadsf-3nasd-3nas-dn3iasd');
const input = document.querySelector('.nbiaosd-xcvkjaw-3nidsf-3nisdf');
const search = document.querySelector('.bnxcv-32jzx-asd20asdiasd-nhoiafs');


function lightmode () {
    container.style.backgroundColor = '#fff';
    container.style.color = '#000';
    console.log('light mode');
    sidebar.style.backgroundColor = '#fff';
    sidebar.style.color = '#000';
    document.querySelector('.top').style.borderBottom = '2px solid #000';
    firstDivTop.style.color = '#000';
    secondDivTop.style.color = '#000';
    thirdDivTop.style.color = '#000';
    darkMode.style.color = '#fff';
    document.querySelector('.nias-d2niasd-nicx-qwnifsad').style.border = '1px solid #000';
    input.style.border = '1px solid #000';
    search.style.color = '#000';
    document.querySelector('.nkxzc-bnmxzbxhcmv-asjd-asjd').style.color = '#000';
};

lightMode.addEventListener('click', () => {
    lightmode();
}); 

const darkMode = document.querySelector('.nasd-2niasd-2uasd');

function darkmode () {
    container.style.backgroundColor = '#19181f';
    sidebar.style.backgroundColor = '#1919f';
    sidebar.style.color = '#fff';
    document.querySelector('.a').style.backgroundColor = '#19181f';
    firstDivTop.style.color = '#bdc5ca';
    secondDivTop.style.color = '#bdc5ca';
    thirdDivTop.style.color = '#bdc5ca';
    input.style.border = '1px solid #fff';
    search.style.color = '#fff';
    document.querySelector('.nias-d2niasd-nicx-qwnifsad').style.border = '1px solid #fff';
    document.querySelector('.nkxzc-bnmxzbxhcmv-asjd-asjd').style.color = '#fff';
};

darkMode.addEventListener('click', () => {
    darkmode();
});

function searchFunction() {
    var searchInput = document.querySelector('.nbiaosd-xcvkjaw-3nidsf-3nisdf').value.toLowerCase();
    var paragraphs = document.getElementsByTagName('.aodjsoj21-asjdoas-12jisad-2joasd');

    var searchResults = document.querySelector('.niasd-2nisdf-3niasd-2niasd');
    searchResults.innerHTML = '';

    for (var i = 0; i < paragraphs.length; i++) {
        var paragraphText = paragraphs[i].textContent.toLowerCase();

        if (paragraphText.includes(searchInput)) {
            var resultItem = document.createElement('p');
            resultItem.textContent = paragraphs[i].textContent;
            searchResults.appendChild(resultItem);
        }
    }
}

const searchBtn = document.querySelector('.bnxcv-32jzx-asd20asdiasd-nhoiafs');

searchBtn.addEventListener('click', () => {
    searchFunction();
});

const link = document.querySelector('.link');

document.addEventListener('DOMContentLoaded', () => {
    const errorPageHomeButton = document.querySelector('.mnasd-2niasd-2niasd0');
    errorPageHomeButton.style.transition = 'all 0.3s ease-in-out';

    errorPageHomeButton.addEventListener('click', () => {
    errorPageHomeButton.style.backgroundColor = '#fff';
    errorPageHomeButton.style.color = '#000';
    setTimeout(() => {
        errorPageHomeButton.style.backgroundColor = '#000';
        errorPageHomeButton.style.color = '#fff';
    }, 300)
});
});