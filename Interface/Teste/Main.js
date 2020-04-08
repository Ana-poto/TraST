
var questions = [
    {
        question: "1.Cum sunt semnalizate benzile de circulație reversibilă, care vă permit să continuați deplasarea?",
        image:'',
        answers: {
            a: 'cu dispozitive de culoare galbenă intermitentă',
            b: 'cu semnul roșu în cruce',
            c: 'cu semnalul verde de forma unei săgeți cu vârful în jos'

        },
        correctAnswer: 'c'
    },
    {
        question: "2.Precizați care dintre indicatoarele de mai jos indică o cale rutieră cu sens unic:",
        image:'../pics/Test/7533.jpg ',
        answers: {
            a: ' indicatorul 1',
            b: ' indicatorul 2',
            c: 'ambele indicatoare'

        },
        correctAnswer: 'c'
    },
    {
        question: "3.Ce semnifică indicatorul din imagine?",
        image:'../pics/Test/3615.jpg',
        answers: {
            a: '„Accesul interzis copiilor neînsoțiți“',
            b: '„Trecere obligatorie pentru copii“',
            c: '„Copii“'

        },
        correctAnswer: 'c'
    },
    {
        question: "4.Ce semnificație are un astfel de marcaj rutier?",
        image:'../pics/Test/3687.jpg ',
        answers: {
            a: 'marcaj pentru spații interzise',
            b: 'marcaj pe o bandă de decelerare',
            c: 'deviere temporară a circulației'

        },
        correctAnswer: 'b'
    },
    {
        question: "5.Ce semnificație are indicatorul din imagine?",
        image:'../pics/Test/3659.jpg ',
        answers: {
            a: 'urmează un sector de drum îngustat temporar',
            b: 'urmează o intersecție cu un drum fără prioritate',
            c: 'este interzisă schimbarea direcției de mers la dreapta în prima intersecție'

        },
        correctAnswer: 'b'
    },
    {
        question: "6.Ce semnificație are marcajul rutier din imagine?",
        image:'../pics/Test/3589.jpg',
        answers: {
            a: 'spațiu pentru oprirea în caz de urgență',
            b: 'marcaj transversal de oprire',
            c: 'bandă de circulație destinată opririi voluntare'

        },
        correctAnswer: 'b'
    },
    {
        question: "7.Ce obligații revin conducătorilor la întâlnirea indicatorului?",
        image:'../pics/Test/3438.jpg',
        answers: {
            a: 'să acorde prioritate vehiculelor care circulă în intersecție',
            b: 'să acorde prioritate de dreapta',
            c: 'să ocolească centrul intersecției și să circule cât mai aproape de marginea străzii'

        },
        correctAnswer: 'a'
    },
    {
        question: "8.Care este semnificația indicatorului?",
        image:'../pics/Test/3601.jpg',
        answers: {
            a: 'obligă la ocolirea prin dreapta a locului unde este instalat',
            b: 'obligă la schimbarea direcției de mers către dreapta',
            c: 'obligă la folosirea benzii de lângă trotuar'

        },
        correctAnswer: 'a'
    },
    {
        question: "9.Indicatorul alăturat reprezintă:",
        image:'../pics/Test/9509.jpg',
        answers: {
            a: 'panouri succesive pentru curbe deosebit de periculoase',
            b: 'panou suplimentar, montat la 150 m față de calea ferată',
            c: 'baliză bidirecțională care indică ocolirea obstacolului prin stânga sau prin dreapta'

        },
        correctAnswer: 'c'
    },
    {
        question: "10.Cum vei proceda la întâlnirea indicatorului „Limitare de viteză 80 km/h”?",
        image:'',
        answers: {
            a: 'nu depășești viteza maximă admisă pe drumurile naționale',
            b: 'nu depășești viteza de 80 km/h',
            c: 'circuli cu o viteză de peste 80 km/h'

        },
        correctAnswer: 'b'
    },
];

var quizContainer = document.getElementById('quiz');
var resultsContainer = document.getElementById('results');
var submit = document.getElementById('submit');

generateQuiz(questions, quizContainer, resultsContainer, submit);

function generateQuiz(questions, quizContainer, resultsContainer, submit){

    function showQuestions(questions, quizContainer){

        var output = [];
        var answers;


        for(var i=0; i<questions.length; i++){


            answers = [];


            for(letter in questions[i].answers){

                answers.push(
                    '<label>'
                    + '<input type="radio" name="question'+i+'" value="'+letter+'">'
                    + letter + ': '
                    + questions[i].answers[letter]
                    + '</label>'
                );
            }
            if(questions[i].image!=''){
            output.push(
                '<div class="question">' + questions[i].question + '</div>'
                +  '<img class="semnT" src="'+questions[i].image  +'" alt="Question_image">'
                + '<div class="answers">' + answers.join('') + '</div>'
            );}
            else
            {
                output.push(
                    '<div class="question">' + questions[i].question + '</div>'
                    + '<div class="answers">' + answers.join('') + '</div>'
                );
            }
        }


        quizContainer.innerHTML = output.join('');
    }


    function showResults(questions, quizContainer, resultsContainer){

        var answerContainers = quizContainer.querySelectorAll('.answers');
        var userAnswer = '';
        var numCorrect = 0;
        for(var i=0; i<questions.length; i++){
            userAnswer = (answerContainers[i].querySelector('input[name=question'+i+']:checked')||{}).value;
            if(userAnswer===questions[i].correctAnswer)
                numCorrect++;
        }
        resultsContainer.innerHTML = numCorrect + ' out of ' + questions.length;

    }
    showQuestions(questions, quizContainer);
    submit.onclick = function(){
        showResults(questions, quizContainer, resultsContainer);
    }

}