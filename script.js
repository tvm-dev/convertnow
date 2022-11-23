//Year
var date = new Date();
year = date.getFullYear();
document.getElementById('year').innerText = date.getFullYear();

//CounterAll Function
function counterAll(obj) {
      
//Count Character OK
document.getElementById('countChar').innerHTML = "Character Count: " + obj.value.length;
    
//Count Words
var words = document.getElementById("content").value;
var count = 0;
var split = words.split(' ');
for (i = 0; i < split.length; i++) {
    if (split[1] != "") {
        count += 1;
    }
}
document.getElementById("countWords").innerHTML = "| Words Count: " + count;

//Count Lines ?
var el = document.getElementById('content');
lineCount = 0;
var lines = el.value.split("\n");

for (var i = 0; i <lines.length; i++) {
    if (lines[i].length > 0 ) lineCount++;
    }
    console.log(lineCount);
    //document.getElementById('countLines').value = lineCount;
    document.getElementById("countLines").innerHTML = "| Line Count: " + lineCount;

}

//Sentence-OK
function Sentence() {
    ////pegar content do textarea
    var text = document.getElementById('content').value;  
    //alert(text);
    //fazer a conversao
    var  textChanged= (text[0].toUpperCase() + text.slice(1).toLowerCase());
    //inserir o texto na testarea alterado!
    document.getElementById('content').value = textChanged;
}

//Lower-OK
function Lower() {
    var text = document.getElementById('content').value;
    var textChanged = (text.toLowerCase());
    document.getElementById('content').value = textChanged;
}

//Upper-OK
function Upper() {
    var text = document.getElementById('content').value;
    var textChanged = (text.toUpperCase());
    document.getElementById('content').value = textChanged;
}

//CapitalizedCase (1º letra de cada palavra em maiúscula)
function capitalizedCase(text) {
    
    var text = document.getElementById('content').value;
    var textChanged = text.toLowerCase().replace(/(?:^|\s)\S/g, function(a) {
        return a.toUpperCase();
    });
    return document.getElementById('content').value = textChanged;
}

//aLtEr cAsE
//Change every letter, no space, in sequence, to your opposite type
/* function alterCase() {
    
    var str = document.getElementById('content').innerHTML, str2 = '';

    for (var i = 0; i < str.length; i++ ) {
        if (str.charAt(i) === str.charAt(i).toLowerCase()) {
            str2 += str.charAt(i).toUpperCase();
        } else if (str.charAt(i) === str.charAt(i).toUpperCase()) {
                 str2 += str.charAt(i).toLowerCase()
        } else {
            str2 += str.charAt(i);
        }
    }
    //console.log(str2, "After");
    //console.log(str2);
    document.getElementById('content').value = str2;


   





}
 */
//Reverse Word: To intert all words: amor -> roma.
function reverseWord(){
   var text =  document.getElementById('content').value;
   var textChanged = text.split("").reverse("").join("");
   return document.getElementById('content').value = textChanged;
    
}
//TitleCase: delete: convert all, except "a, an, is, are, etc"
function titleCase () {

}
//InVeRsE CaSe: what is upper, the code convert in lower, and vice-versa!
function inverseCase() {
    var text = document.getElementById('content').value;
    const textChanged = text
    .split("")
    .map(c => (c === c.toUpperCase() ? c.toLowerCase() : c.toUpperCase()))
    .join("");
    return document.getElementById('content').value = textChanged;
       
}


//Comma space: insert space and comma in the words
function commaSpace() {
    var text = document.getElementById('content').value;
    //var textChanged = text.split("").reverse().join().split(" ").reverse().join(" ")
    var textChanged = text.split("");
    
    document.getElementById('content').value = textChanged;

}

//Download Text
function downloadText(textToWrite, fileNameToSaveAs)
    {
    	var textFileAsBlob = new Blob([textToWrite], {type:'text/plain'}); 
    	var downloadLink = document.createElement("a");
    	downloadLink.download = fileNameToSaveAs;
    	downloadLink.innerHTML = "Download File";
    	if (window.webkitURL != null)
    	{
    		// Chrome allows the link to be clicked
    		// without actually adding it to the DOM.
    		downloadLink.href = window.webkitURL.createObjectURL(textFileAsBlob);
    	}
    	else
    	{
    		// Firefox requires the link to be added to the DOM
    		// before it can be clicked.
    		downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
    		downloadLink.onclick = destroyClickedElement;
    		downloadLink.style.display = "none";
    		document.body.appendChild(downloadLink);
    	}
    
    	downloadLink.click();
    }

//Copy text to Clipboard
function copyToClipboard() {
    
    let copytext = document.getElementById('content');
    copytext.select();
    copytext.setSelectionRange(0, 99999);
    document.execCommand("copy");
    //alert("Your text is " + copytext.value);
    var copied = document.getElementById('copied');
    copied.innerHTML = '<br><b>Text copied to clipboard </b>'

    setTimeout(function(){
        var msg = document.getElementById('copied');
        msg.style = "display:none"
   
    }, 3000);

}

//Clean OK
function Clean() {
    document.getElementById('content').value = '';
    document.location.reload(true);
}

//SpaceLetters
function spaceLetters() {
    var text =  document.getElementById('content').value;
    var textChanged = text.split('').map(function (item){
        return item.split('').reverse().join();
    }).join(' ');
    document.getElementById('content').value = textChanged;
    
}

//Remove spaces from words, etc
function removeSpaces() {

    var text = document.getElementById('content').value;
    var newText = text.replace(/\s/g, '');
   return document.getElementById('content').value = newText;

}


//Tests
function a() {

    var text = document.getElementById('content').value;
    var newText = text.replace(/\s/g, '');
   return document.getElementById('content').value = newText;

}
