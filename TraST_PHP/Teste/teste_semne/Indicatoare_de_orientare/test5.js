//[imaginile referetiante sunt din A_learn/Indicatoare_de_orientare]
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
    gameOverHTML += "<footer><form action='../../../Auth/recordProgressTest.php' method='post'> ";
    gameOverHTML += "<input type='text' id='testNo' name='testNo' value='t5'>";
    gameOverHTML += "<input type='text' id='quizScore' name='quizScore' value=" + quiz.score + ">";
    gameOverHTML += "<button id='contor'>Marcheaza progres</button> </form> </footer>";
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
};

// create questions here
var questions = [
    new Question("1.Care semnifica presemnalizarea directiilor intr-o intersectie cu sens giratoriu?",
    ["<span> <div class='image'> <img  alt='image' src='5.png' >A </div> <div class='image'><img  alt='image' src='2.png' >B </div> <div class='image'><img  alt='image' src='7.png' >C </div> </span>",
    "",
    ""],
["A", "B","C"],
"A"),
    new Question("2.Precizați ce semnificatie are urmatorul indicator <br> <div  class='image_q'> <img alt='image' src='8.png' > </div> </br>",
    ["A: Presemnalizarea pe autostrada a unui spatiu de servicii",
    "B: Presemnalizarea pe autostrada pentru parcare",
    "C: Presemnalizarea unui loc periculos/o intersectie sau o restricitie"],
        ["A", "B","C"],
        "B"),
    new Question("3.Ce semnifică indicatorul din imagine? <br> <div  class='image_q'> <img alt='image' src='2.png' > </div> </br>",
        ["A: Presemnalizarea directiilor indicate",
            "B: Presemnalizarea directiilor la o intersectie denivelata de drumuri",
            "C: Presemnalizarea directiilor intr-o intersectie cu sens giratoriu"],
        ["A", "B","C"],
        "B"),
    new Question("4.Care dintre urmatoarele indica limite de viteza pentru diferite benzi de circulatie?",
    ["<span> <div class='image'> <img  alt='image' src='24.png' >A </div> <div class='image'><img  alt='image' src='26.jpg' >B </div> <div class='image'><img  alt='image' src='27.jpg' >C </div> </span>",
    "",
    ""],
    ["A", "B","C"],
    "B"),
    new Question("5.Ce semnifica urmatorul indicator? <br> <div  class='image_q'> <img alt='image' src='52.png' > </div> </br>",
         ["A: Organizarea traficului pe benzi de circulatie",
             "B: Directia de urmat in cazul devierii temporare a circulatiei",
             "C: Banda de circulatie rezervata autovehiculelor de transport public de persoane"],
        ["A", "B","C"],
        "B") 
];

// create quiz
var quiz = new Quiz(questions);

// display quiz
populate();