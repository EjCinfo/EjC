class Question {
  constructor(text, choices, answer) {
    this.text = text;
    this.choices = choices;
    this.answer = answer;
  }
  isCorrectAnswer(choice) {
    return this.answer === choice;
  }
}
let questions = [
  new Question("Quelle est la date de la création de la CNJE ?", ["1969", "1954", "1967", "1958"], "1969"),
  new Question("Combien il y avait de JE à la création de la CNJE ?", ["3","5", "6", "1"], "6"),
  new Question("Quelles sont les 3 types de structures du mouvement ?", ["Junior-Entreprise, Junior-Initiative, Junior-Creative ","Junior-Entreprise, Junior-Initiation, Junior-Creative", "Junior-Entreprise, Junior-Initiative, Junior-Creation", "Junior-Entreprise, Junior-Initiation, Junior-Crew"], "Junior-Entreprise, Junior-Initiative, Junior-Creation"),
  new Question("Quel est le taux de fermeture maximal pour les administrateurs/pour le bureau?", ["30%/10%","35%/5%", "70%/30%", "20%/5%"], "30%/10%"),
  new Question("Combien y a-t-il d'AGT par an ?", ["1","4", "3", "2"], "2"),
];

console.log(questions);

class Quiz {
  constructor(questions) {
    this.score = 0;
    this.questions = questions;
    this.currentQuestionIndex = 0;
  }
  getCurrentQuestion() {
    return this.questions[this.currentQuestionIndex];
  }
  guess(answer) {
    if (this.getCurrentQuestion().isCorrectAnswer(answer)) {
      this.score++;
    }
    this.currentQuestionIndex++;
  }
  hasEnded() {
    return this.currentQuestionIndex >= this.questions.length;
  }
}

// Regroup all  functions relative to the App Display
const display = {
  elementShown: function(id, text) {
    let element = document.getElementById(id);
    element.innerHTML = text;
  },
  endQuiz: function() {
    endQuizHTML = `
      <h1>Quiz terminé !</h1>
      <h3> Votre score est de : ${quiz.score} / ${quiz.questions.length}</h3>`;
    this.elementShown("quiz", endQuizHTML);
  },
  question: function() {
    this.elementShown("question", quiz.getCurrentQuestion().text);
  },
  choices: function() {
    let choices = quiz.getCurrentQuestion().choices;

    guessHandler = (id, guess) => {
      document.getElementById(id).onclick = function() {
        quiz.guess(guess);
        quizApp();
      }
    }
    // display choices and handle guess
    for(let i = 0; i < choices.length; i++) {
      this.elementShown("choice" + i, choices[i]);
      guessHandler("guess" + i, choices[i]);
    }
  },
  progress: function() {
    let currentQuestionNumber = quiz.currentQuestionIndex + 1;
    this.elementShown("progress", "Question " + currentQuestionNumber + " sur " + quiz.questions.length);
  },
};

// Game logic
quizApp = () => {
  if (quiz.hasEnded()) {
    display.endQuiz();
  } else {
    display.question();
    display.choices();
    display.progress();
  } 
}
// Create Quiz
let quiz = new Quiz(questions);
quizApp();

console.log(quiz);
