const button = document.querySelector('.sport__news');
const farmers = document.querySelector('.farmers__news');

function getFullNews() {
	let fullNews = document.createElement('div');
	fullNews.innerHTML = `<h5>A first half strike from Radamel Falcao was enough to hadn Rayo Valecano a shock 1-0 win over Barcelona on Wednesday and bring an end to Ronado Koemans reign as coach of the catalan club.</h5> <div><img style="display:block; margin:0 auto;" src="./koeman.jpg"/><hr></div>`;
	document.body.appendChild(fullNews);
	button.disabled = true;
}

function getFarmersNews() {

	let fullNews = document.createElement('div');
    
	fullNews.innerHTML = `<div><h4>Why is France's ligue 1 called Farmers league</h4>
        <img style="display:block; margin:0 auto;" src="./psg.jpg"/>
        <h5>The top-tier of French football is always accused of being a one-horse race with a single top side dominating the league at any given time.</h5>
        <h6>you will probably have notived the term 'farmers league' tossed around after yet another demolition committed by Paris Saint-Germain in Ligue 1. PSG PSG seem to be eternally guling away with title, and they are living through an era of prolonged dominance at the top of the top of the French league.</h6>
        <hr>
        <h5>Why is Ligue 1 called a 'Farmers League'?</h5>
           <hr>
           <h6>In European football, there is the idea that the "top five leagues" comprise of the Premier League, La Lifa, Bundesliga, Serie A and Ligue 1. Of these European competitions, fasn accuse Ligue 1 of being a 'Farmers League'. Additionally, of those five, it is generally considered that Ligue 1 is the least elite of the competitions, though they have raised their profile and status in recent years what with their access to riches and star players Mbappe, Neymar, Messi.</h6>
        </div>`;
	document.body.appendChild(fullNews);
    farmers.disabled = true;
}

button.addEventListener('click', getFullNews);
farmers.addEventListener('click', getFarmersNews);
