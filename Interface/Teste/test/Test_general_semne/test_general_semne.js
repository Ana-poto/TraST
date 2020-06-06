function wait(ms){
    var start = new Date().getTime();
    var end = start;
    while(end < start + ms) {
        end = new Date().getTime();
    }
}


function Quiz(questions) {
    this.score = 0;
    this.questions = questions;
    this.questionIndex = 0;
}

Quiz.prototype.getQuestionIndex = function() {
    return this.questions[this.questionIndex];
}

Quiz.prototype.guess = function(answer) {
    if(this.getQuestionIndex().isCorrectAnswer(answer)) {
        console.log(answer);

        this.score++;
    }

    for(var i = 0; i < quiz.getQuestionIndex().choices.length; i++) {
        var number =this.getQuestionIndex().getCorrectAnswer().charCodeAt(0)-65;
        if (i===number)
            document.getElementById("btn"+ i).style.backgroundColor="green";
        else
            document.getElementById("btn"+ i).style.backgroundColor="red";
        document.getElementById("btn"+ i).disabled=true;
    }
    this.questionIndex++;
    document.getElementById('nxtbtn').disabled = false;
}



Quiz.prototype.isEnded = function() {
    return this.questionIndex === this.questions.length;
}


function Question(text, textAnswer, choices, answer) {
    this.text = text;
    this.textAnswer = textAnswer;
    this.choices = choices;
    this.answer = answer;
}

Question.prototype.isCorrectAnswer = function(choice) {

    return this.answer === choice;

}
Question.prototype.getCorrectAnswer= function(){
    return this.answer

}


function populate() {
    if(quiz.isEnded()) {
        document.getElementById('nxtbtn').style.display = 'none';
        showScores();
    }
    else {
        // show question
        var element = document.getElementById("question");
        element.innerHTML = quiz.getQuestionIndex().text;


        // show textAnswer
        var textAnswer = quiz.getQuestionIndex().textAnswer;
        for(var i = 0; i < textAnswer.length; i++) {
            var element = document.getElementById("textAnswer" + i);
            element.innerHTML = textAnswer[i];
        }

        // show options
        var choices = quiz.getQuestionIndex().choices;
        for(var i = 0; i < choices.length; i++) {
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            document.getElementById("btn"+ i).disabled=false;
            guess("btn" + i, choices[i]);

        }

        showProgress();
        for(var i = 0; i < quiz.getQuestionIndex().choices.length; i++) {
            document.getElementById("btn"+ i).style.backgroundColor="#778897";
        }
        document.getElementById('nxtbtn').disabled = true;
    }
};


function guess(id, guess) {
    var button = document.getElementById(id);
    button.onclick = function() {
        quiz.guess(guess);

    }
};


function showProgress() {
    var currentQuestionNumber = quiz.questionIndex + 1;
    var element = document.getElementById("progress");
    element.innerHTML = "Question " + currentQuestionNumber + " of " + quiz.questions.length;
};

function showScores() {
    var gameOverHTML = "<h1  class='result'>Result</h1>";
    gameOverHTML += "<h2 id='score'> Your scores: " + quiz.score + "</h2>";
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
};

// create questions here
var questions = [
    new Question("1.Cum sunt semnalizate benzile de circulație reversibilă, care vă permit să continuați deplasarea?",
        ["A: cu dispozitive de culoare galbenă intermitentă",
            "B: cu semnul roșu în cruce",
            "C: cu semnalul verde de forma unei săgeți cu vârful în jos"],
        ["A", "B","C"],
        "C"),
    new Question("2.Precizați care dintre indicatoarele de mai jos indică o cale rutieră cu sens unic: <br> <div  class='image'> <img alt='image' src='7533.jpg'  > </div> </br>",
        ["A: indicatorul 1",
            "B: indicatorul 2",
            "C: ambele indicatoare"],
        ["A", "B","C"],
        "C"),
    new Question("3.Ce semnifică indicatorul din imagine? <br> <div  class='image_q'> <img alt='image' src='3615.jpg' > </div> </br>",
        ["A: Accesul interzis copiilor neînsoțiți",
            "B: Trecere obligatorie pentru copii",
            "C: Copii"],
        ["A", "B","C"],
        "C"),
    new Question("4.Ce semnificație are un astfel de marcaj rutier? <br><div  class='image_q'> <img alt='image' src='3687.jpg' > </div> </br>",
        ["A: marcaj pentru spații interzise",
            "B: marcaj pe o bandă de decelerare",
            "C: deviere temporară a circulației"],
        ["A", "B","C"],
        "B"),
    new Question("5.Ce semnificație are indicatorul din imagine? <br> <div  class='image_q'> <img alt='image' src='3659.jpg' > </div> </br>",
        ["A: urmează un sector de drum îngustat temporar",
            "B: urmează o intersecție cu un drum fără prioritate",
            "C: este interzisă schimbarea direcției de mers la dreapta în prima intersecție"],
        ["A", "B","C"],
        "B"),
    new Question("6.Ce semnificație are marcajul rutier din imagine? <br> <div  class='image_q'> <img alt='image' src='3589.jpg' > </div> </br>",
        ["A: spațiu pentru oprirea în caz de urgență",
            "B: marcaj transversal de oprire",
            "C: bandă de circulație destinată opririi voluntare"],
        ["A", "B","C"],
        "B"),
    new Question("7.Ce obligații revin conducătorilor la întâlnirea indicatorului? <br> <div  class='image_q'> <img alt='image' src='3438.jpg' > </div> </br>",
        ["A: să acorde prioritate vehiculelor care circulă în intersecție",
            "B: să acorde prioritate de dreapta",
            "C: să ocolească centrul intersecției și să circule cât mai aproape de marginea străzii"],
        ["A", "B","C"],
        "A"),
    new Question("8.Care este semnificația indicatorului? <br> <div  class='image_q'> <img alt='image' src='3601.jpg' > </div> </br>",
        ["A: obligă la ocolirea prin dreapta a locului unde este instalat",
            "B: obligă la schimbarea direcției de mers către dreapta",
            "C: obligă la folosirea benzii de lângă trotuar"],
        ["A", "B","C"],
        "A"),
    new Question("9.Indicatorul alăturat reprezintă: <br> <div  class='image_q'> <img alt='image' src='9509.jpg' > </div> </br>",
        ["A: panouri succesive pentru curbe deosebit de periculoase",
            "B: panou suplimentar, montat la 150 m față de calea ferată",
            "C: baliză bidirecțională care indică ocolirea obstacolului prin stânga sau prin dreapta"],
        ["A", "B","C"],
        "C"),
    new Question("10.Cum vei proceda la întâlnirea indicatorului „Limitare de viteză 80 km/h”? <br> <div  class='image_q'> <img alt='image' src='3615.jpg' > </div> </br>",
        ["A: nu depășești viteza maximă admisă pe drumurile naționale",
            "B: nu depășești viteza de 80 km/h",
            "C: circuli cu o viteză de peste 80 km/h"],
        ["A", "B","C"],
        "B")
];

// create quiz
var quiz = new Quiz(questions);

// display quiz
populate();
