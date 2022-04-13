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
  new Question("Combien y a-t-il d'AGT par an ?", ["1","4", "3", "2"], "2"),
  new Question("Quels documents sont à archiver à vie ?", ["Status, RI, PV de CA, PV AG, Baux", "Status RI, JOFR, Récipissés Préfecture, PV AG, Baux, Factures de travaux", "Status RI, JOFR, Dossier d'adhésion, PV AG, Baux, Factures de travaux"], "Status RI, JOFR, Récipissés Préfecture, PV AG, Baux, Factures de travaux"),
  new Question("Quel texte définit la notion d'association ?", ["Loi 1906", "Lettre et arrêté ministériels", "Lettre de Bérégovoy", "Loi 1901"], "Loi 1901"),
  new Question("Que ne précise pas le Règlement Intérieur", ["Modalités de dons", "Le nom des membres de l'association et leur poste", "Condition de rémunération", "L'utilisation du matériel d'EjC"], "Le nom des membres de l'association et leur poste"),
  new Question("Que définissent la lettre et arrêté ministériels ?", ["Statut social", "Statut financier", "Statut moral", "Statut fiscal"], "Statut social"),
  new Question("Quels sont les points définis par la lettre de Bérégovoy ?", ["TVA, IS, DAS2, DADS", "TVA, IS, honoraires, DADS", "TVA, IS, honoraires, DAS2", "TVA, IF, DAS2, DADS"], "TVA, IS, honoraires, DAS2"),
  new Question("Quels sont les 5 piliers du code de déontologie ?", ["Plus-value, livrable quali, lien intervenant - JE - client, doc clean, taux d'ouv", "plus-value, résultats, lien intervenant - JE - client, doc clean, taux fermeture", "Livrable quali, lien intervenant - JE - client, doc clean, taux d'ouv, RGPD", "Plus-value, livrable quali, docs confidentialité, doc clean, taux d'ouv"], "Plus-value, livrable quali, lien intervenant - JE - client, doc clean, taux d'ouv"),
  new Question("Que vaut le taux d'ouverture ?", ["1-taux de fermeture -> <30% CA, <10% 3 membres du bureau", "1+taux de fermeture -> <30% CA, <10% 3 membres du bureau", "1-taux de fermeture -> >70% CA, >90% 3 membres du bureau", "1+taux de fermeture -> >70% CA, >90% 3 membres du bureau"], "1-taux de fermeture -> >70% CA, >90% 3 membres du bureau"),
  new Question("Laquelle de ces sanctions n'est pas une sanctions d'audit ?", ["rétrogradation", "avertissement conservatoire", "avertissement", "procédure principale d'urgence"], "avertissement"),
  new Question("Qu'est-ce qui n'est pas dans le dossier de suivi ?", ["Status", "PV d'AG", "Licences", "Récipissé Préfecture"], "Licences"),
  new Question("Qui sont les partenaires premium de la CNJE", ["BNP Paribas, Alten, EY, Engie", "BNP Paribas, Alten, EY, Engie, Maif", "BNP Paribas, Alten, EY, Engie, Saint-Gobain", "BNP Paribas, Alten, EY, Engie, Maif, Saint-Gobain, Groupe Roullier"], "BNP Paribas, Alten, EY, Engie"),
  new Question("Que caractérise la lettre de l'ACOSS en 2007 ?",["Satut social", "Définition du cadre assiociatif", "Précise validation phase sans plus-value pédagogique", "Détail la TVA, l'IS et le DAS 2"], "Précise validation phase sans plus-value pédagogique"),
  new Question("Quelle est la différence entre une AGO et une AGE ?", ["Aucune hormis que l'AGO a une date fixe alors que l'AGE nan", "AGO : quiti vs AGE est convoquée pour valider le changement d'équipe", "AGO : annuelle + évènements précis VS AGE : modification textes ou membres", "AGO c'est pour les JE et AGE c'est pour les autres structures (JI, JC...)"], "AGO : annuelle + évènements précis VS AGE : modification textes ou membres"),
  new Question("Quel document, rempli par l'intervenant, est nécessaire afin d'être payé ?", ["Le BV (Bulletin de Versement", "Le RP (Rapport Pédagogique", "Le PV (Process Verbal", "Le RME (Récapitulatif de Mission Etudiant)"], "Le RP (Rapport Pédagogique"),
  new Question("Laquelle de ces régions n'est pas une région CNJE ?", ["Nord-Est", "Centre-Est", "Méditerranée", "Nord"], "Nord-Est"),
  new Question("Lequel de ces droits n'est pas un droit du RGPD ?", ["Limitation", "Image", "Rectification", "Portabilité"], "Image"),
  new Question("Combien y a t-il d'AGP par an et quelle est la sanction associée à cette réunion en cas d'absence répetée ?", ["5 et avertissement statutaire", "5 et avertissement conservatoire", "3 et avertissement conservatoire", "3 et avertissameent statutaire"], "5 et avertissement statutaire"),
  new Question("Comment est calculée l'assiette de cotisation ?", ["Base Urssaf (= 4xSMIC Horaire) x nb JEH", "Base Urssaf (=4xSMIC Horaire) x valeur moyenne du JEH", "Base Urssaf (=4xvaleur moyenne du JEH) x nb JEH", "nbr de JEH x code Urssaf JE"], "Base Urssaf (= 4xSMIC Horaire) x nb JEH"),
  new Question("Que signifie RGPD ?", ["Règlementation Générale de la Protection des Données", "Règlement Général de la Protéction des Données", "Règlement Général sur la Protection des Données", "Règlementation Générale sur la Protection des Données"], "Règlement Général sur la Protection des Données"),
  new Question("Combien d'années doit-on archiver les documents d'études papiers ?", ["3", "5", "10", "A vie"], "5"),
  new Question("Quelle situation peut être assimilée à du prêt de main d'oeuvre en junior ?", ["L'intervenant va dans les locaux du client", "L'intervenant a des réunions hebdomadaires avec client et chef de projet", "Le fait que l'école nous fournisse des intervenants (les étudiants)", "Engager quelqu'un pour réaliser notre prospection"], "L'intervenant va dans les locaux du client"),
  new Question("Quel est le délai maximum de déclaration de changement de status en Junior ?", ["1 mois", "2 mois", "3 mois", "4 mois"], "3 mois"),
  new Question("Qu'implique un blâme statutaire ?", ["Impossibilité de participer à un prix, exclusion de la L30", "Impossibilité de participer à un prix, Interdiction d'accès aux évènements CNJE", "Radiation du mouvement, Interdiction d'accès aux évènements CNJE", "Radiation du mouvement, Exclusion de la L30"], "Impossibilité de participer à un prix, exclusion de la L30"),
  new Question("Sur une étude avec 3 intervenants, quel est le nombre minimal de rapports pédagogiques à réaliser ?", ["1", "2", "3", "4"], "1"),

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
    // afficher les choix
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

// Logique du jeu
quizApp = () => {
  if (quiz.hasEnded()) {
    display.endQuiz();
  } else {
    display.question();
    display.choices();
    display.progress();
  } 
}
// Création du quizz
let quiz = new Quiz(questions);
quizApp();

console.log(quiz);
