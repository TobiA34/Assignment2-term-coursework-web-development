// Vue.component('tutorial',{
// 	props:['author'],
// 	template: '<h2>Hello and welcome to the data sourced from the component, written by {{author}}.</h2>'
// })
var dummyData = [
	{
		console:"PS4,Xbox",
		name: "Read Dead Redemption",
		information: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa",
	image: "https://hb.imgix.net/75740eb26832ca9e583f573b09a294bcc47fb227.jpg?auto=compress,format&fit=crop&h=353&w=616&s=0a22e38765fcf80ab5d14cb123e6c3aa",
},
{
	console:"PS4,Xbox,Nintendo Switch",
	name: "Fifa 20",
	information: "alrazy ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa",
	image: "data:image/jpeg;base64,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",
},
	{
		console:"PS4,Xbox",
		name: "Fallout 4",
		information: "mohim ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa",
	    image: "http://static1.gamespot.com/uploads/original/1179/11799911/3115926-nuka1.jpg",
    },

	{
		console:"Nintendo Switch",
		name: "Pokemon Sword",
		information: "mohim ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa",
		image: "https://cdn02.nintendo-europe.com/media/images/10_share_images/games_15/nintendo_switch_4/H2x1_NSwitch_PokemonSword_enGB_image1600w.jpg",
	},

	{
		console:"PS4,Xbox",
		name: "CyberPunk 2077",
		information: "mohim ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa",
		image: "https://cdn.wccftech.com/wp-content/uploads/2019/06/keanu-reeves-cyberpunk-2077-johnny-silverhand.jpg",
	},

	{
		console:"PS4,Xbox",
		name: "Assassin Creed Odyssey",
		information: "mohim ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa",
		image: "https://steamcdn-a.akamaihd.net/steam/apps/812140/header.jpg?t=1567612269",
	}

]




var app = new Vue({
	el: '#app',
	data: {
		gameReviews: dummyData,
		currentIdx: 0
	},

	search: "",
	computed: {
		gameReviews() {
			return this.dummyData.filter(games => {
				return games.name.toLowerCase().includes(this.search.toLowerCase())
			})
		}
	}
})