function makeLetter () {
	var a,aa_word = 17;
var main_letter = Math.floor((Math.random()*53)+0); //rand(0,53);
var letter_attr = Math.floor((Math.random()*21)+0); //rand(0,21);
if(main_letter<17){
	a = '&#x'+((parseInt('0x904',16)+main_letter)).toString(16).toUpperCase()+";";
}
else {
	a = '&#x'+((parseInt('0x904',16)+main_letter)).toString(16).toUpperCase()+";&#x"+((parseInt('0x93A',16)+main_letter)).toString(16).toUpperCase()+";";
}
return a;

}

function makeWord() {
	word_letter_count = Math.floor((Math.random()*7)+1);
	var letterss = '';
	for (var i=0; i <word_letter_count ; i++) {
		letterss += makeLetter();
	}

	return letterss;	
}

function makeSentence() {
	para_word_count = Math.floor(Math.random() * (10 - 3 + 1)) + 3;
	var words = '';
	for (var i=0; i <para_word_count ; i++) {
		words += ' '+makeWord();
	}
	return words+"&#x0964;";
}

function makePara(a) {
	var sentence=" ";
	for (var i = 0; i < a; i++) {
			sentence += makeSentence();
		};
	return sentence+"<br>";
}
