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
    gameOverHTML += "<input type='text' id='testNo' name='testNo' value='t_A'>";
    gameOverHTML += "<input type='text' id='quizScore' name='quizScore' value=" + quiz.score + ">";
    gameOverHTML += "<button id='contor'>Marcheaza progres</button> </form> </footer>";
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
};

// create questions here
var questions = [
    new Question("1. Puteţi schimba poziţia autovehiculului, dacă acesta a fost implicat într-un accident din care a rezultat moartea sau vătămarea integrităţii corporale ori a sănătăţii unor persoane?",
        ["A: da, cu încuviinţarea poliţiei, care cercetează accidentul",
            "B: da, dacă persoana vătămată se poate deplasa singură",
            "C: nu, până la sosirea ambulanţei."],
        ["A", "B","C"],
        "A"),
    new Question("2. Cum puteţi folosi în condiţii optime capacitatea de frânare a motorului, atunci când coborâţi o pantă lungă şi înclinată?",
    ["A: schimbaţi într-o treaptă superioară",
            "B: schimbaţi la timp într-o treaptă inferioară",
            "C: după schimbarea vitezei, aduceţi imediat maneta în 'punctul mort'"],
        ["A", "B","C"],
        "B"),
    new Question("3. În ce condiţii pot circula pe drumurile publice autovehiculele şi remorcile?",
        ["A: când au un aspect civilizat",
            "B: când nu depăşesc greutatea şi gabaritul înscrise în certificatul de înmatriculare",
            "C: când sunt în bună stare de funcţionare şi îndeplinesc condiţiile tehnice stabilite prin lege"],
        ["A", "B","C"],
        "C"),
    new Question("4.Pe timpul deplasării într-un autoturism pe un drum public este interzis:",
        ["A:să fie transportaţi copii de peste 3 ani mai scunzi de 150cm pe scaunul din spate",
            "B: să se fumeze în timpul mersului",
            "C: ocupanţii locurilor din faţă să ţină în braţe animale"],
        ["A", "B","C"],
        "C"),
    new Question("5.La intersecţiile fără marcaje, conducătorii auto care vor să circule pe direcţia înainte vor ocupa:",
        ["A:  rândul din stânga",
            "B: rândul din dreapta",
            "C: oricare dintre rânduri"],
        ["A", "B","C"],
        "C"),
    new Question("6.Limita maximă de viteză pe care administratorul drumului public o poate stabili pe anumite sectoare, din interiorul localităţilor, pentru autovehiculele din categoriile A şi B, nu poate fi mai mare de:",
        ["A: 50 km/h",
            "B: 80 km/h",
            "C: 110 km/h"],
        ["A", "B","C"],
        "B"),
    new Question("7.Un autovehicul avariat nu mai poate circula dacă:",
        ["A: are elemente de caroserie distrus",
            "B: au trecut mai mult de 30 de zile de la data producerii avariei",
            "C: au trecut mai mult de 3 zile de la constatare"],
        ["A", "B","C"],
        "B"),
    new Question("8.Ce categorii de vehicule au obligaţia de a folosi luminile de întâlnire pe timp de zi?",
        ["A: autovehiculele care tractează alte vehicule sau care transportă produse periculoase",
            "B: autovehiculele care însoţesc coloane militare sau transportă grupuri de persoane",
            "C: ambele variante sunt corecte"],
        ["A", "B","C"],
        "C"),
    new Question("9.Precizaţi dacă posesorul unui permis de conducere categoria B are permisiunea de a conduce un autoturism cu remorcă:",
        ["A: da, cu condiţia ca acesta să aibă permis de cel puţin 3 ani",
            "B: da, dacă masa remorcii nu depăşeşte 750 kg",
            "C: nu, deoarece pentru o astfel de remorcă este necesar un permis de conducere categoria BE"],
        ["A", "B","C"],
        "B"),
    new Question("10. Care este rolul marcajelor rezonatoare?",
        ["A: dublează marcajele convenţionale în zonele periculoase",
            "B: avertizează conducătorii de autovehicule că depăşesc zona de carosabil marcată şi destinată sensului de deplasare",
            "C: avertizează conducătorii de autovehicule că vor pătrunde într-o zonă supravegheată cu aparatură radar"],
        ["A", "B","C"],
        "B"),
        new Question("11. Ce substanţe au efect asemănător cu cel al alcoolului şi pot reduce capacitatea de concentrare a unui conducător auto?",
        ["A: condimentele foarte iuţi",
            "B: medicamentele sau substanţele cu efect psihoactiv",
            "C: cofeina"],
        ["A", "B","C"],
        "B"),
    new Question("12. Este permisă montarea, de către deţinătorul unui autovehicul, a unui alt avertizor sonor în afara celui omologat de către autoritatea competentă?",
    ["A:  Regulamentul nu prevede nimic în acest sens",
            "B: da, cu condiţia ca acesta să nu fie deranjant din punct de vedere sonor",
            "C: nu"],
        ["A", "B","C"],
        "C"),
    new Question("13. Conducătorii de autovehicule pot folosi mijloace proprii de detectare a dispozitivelor de măsurare a vitezei?",
        ["A: da",
            "B: nu",
            "C: acest aspect nu este stabilit legal"],
        ["A", "B","C"],
        "A"),
    new Question("14. Ce obligaţii aveţi dacă, pe drumul pe care circulaţi, observaţi evenimente de natură a pune în pericol siguranţa circulaţiei?",
        ["A: să semnalizaţi participanţii la trafic care circulă din sens opus",
            "B: să emiteţi semnale acustice",
            "C: să sesizaţi cea mai apropiată unitate de poliţie în legătură cu obstacolele care pun în pericol siguranţa circulaţiei"],
        ["A", "B","C"],
        "C"),
    new Question("15. Dacă circulaţi pe un drum naţional european (E), vă este interzis:",
        ["A:  să folosiţi pe timpul zilei luminile de întâlnire",
            "B: să opriţi pe partea carosabilă",
            "C: să depăşiţi"],
        ["A", "B","C"],
        "B"),
    new Question("16. În faţa dvs. s-a produs un accident rutier care este cercetat de poliţie, iar circulaţia se desfăşoară anevoios, pe un singur sens. Cum veţi proceda?",
        ["A: vă continuaţi drumul cu atenţie, respectând indicaţiile poliţistului rutier",
            "B:  vă continuaţi drumul cu viteză sporită, pentru a nu bloca traficul rutier",
            "C: reduceţi viteza şi opriţi în locul accidentului, pentru a vedea ce s-a întâmplat"],
        ["A", "B","C"],
        "A"),
    new Question("17. În care dintre situaţii este interzis să circulaţi pe drumurile publice?",
        ["A:  atunci când certificatul de înmatriculare este deteriorat",
            "B: atunci când vehiculul nu este asigurat de răspundere civilă, în caz de pagube materiale produse terţilor prin accidente de circulaţie, conform legii",
            "C: atunci când conducătorul auto nu a plătit taxa de folosire a drumurilor publice"],
        ["A", "B","C"],
        "B"),
    new Question("18. Este interzis ca autovehiculele să fie echipate cu:",
        ["A: dispozitive antiradar",
            "B: sisteme de navigaţie ",
            "C: sisteme sonor antifurt"],
        ["A", "B","C"],
        "A"),
    new Question("19. Care sunt vitezele maxime admise pentru subcategoria de autovehicule B1?",
        ["A: 90 km/h pe autostrăzi, 80 km/h pe drumurile expres sau naţionale europene şi 70 km/h pe celelalte categorii de drumuri",
            "B: 110 km/h pe autostrăzi, 90 km/h pe drumurile expres sau naţionale europene şi 80 km/h pe celelalte categorii de drumuri",
            "C: 130 km/h pe autostrăzi şi 90 km/h pe celelalte categorii de drumuri"],
        ["A", "B","C"],
        "A"),
    new Question("20. Este permisă oprirea voluntară a autovehiculului în tuneluri?",
        ["A: da",
            "B: nu",
            "C: numai dacă lungimea tunelului depăşeşte 1000 m"],
        ["A", "B","C"],
        "B")

];

// create quiz
var quiz = new Quiz(questions);

// display quiz
populate();
