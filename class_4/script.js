fetch("https://api-football-v1.p.rapidapi.com/v3/teams?id=33", {
	"method": "GET",
	"headers": {
		"x-rapidapi-host": "api-football-v1.p.rapidapi.com",
		"x-rapidapi-key": "4dfb016a0bmsh7dc911e2ecf70cep1ade67jsn9ff7c0ea8e35"
	}
})
.then(response => {
	console.log(response);
})
.catch(err => {
	console.error(err);
});