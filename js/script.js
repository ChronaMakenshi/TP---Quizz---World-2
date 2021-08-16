let a;
let x = 0;
let score = 0;
$("#testbtn").hide();
$("#btnaccueil").hide();
$("#testbtn1").hide();

// choix de la difficulter et du theme sur les bouton des difficulter

$("input").on("click", function () {
  // demande du prenom

  let nom = prompt("Entrer votre prémom!");

  // mise en forme du prenom

  nom = nom.charAt(0).toUpperCase() + nom.substr(1).toLowerCase();

  $(".all").hide();
  $("#test1").show();

  // recuperation nom du theme dans le HTML

  let add = $(this).parent().parent().attr("id");

  // recuperation difficulter choisie par l'utilisateur dans le html

  let diff = $(this).val();

  // recuperation de la src de l'image correspondant au theme choiise par l'utilsateurdans le html

  let src = $(this).parent().parent().parent().children("img").attr("src");

  // recuperation titre du theme dans le html

  let h2 = $(this).parent().parent().parent().children("h2").text();

  // debut ajax

  $.ajax({
    url: "json/quizz" + add + ".json",
    type: "GET",
    dataType: "json",

    success: function (data) {
      let html = "";

      // affichage theme et difficulter
      html +=
        "<p class='text-center'>" + h2 + " - " + "Niveau " + diff + "</p>";
      html +=
        "<p class='text-center'>" +
        nom +
        " , vous allez pouvoir démarrer ce quizz !!!</br>";

      // affichage image du theme choisie

      html += "<img class='img1' src='" + src + "'" + "/></br>";

      // affichage bouton demarrez le quizz

      html += "<button id='btn' type='submit'>Démarrez le Quizz</button>";

      $("#test1").html(html);

      let html1 = "";

      // bouton amorse de la 1er question

      $("#btn").on("click", function () {
        // numero de la question

        let id = data.quizz[diff][x].id;

        // les 4 reponse possible

        let rep0 = data.quizz[diff][x].propositions[0];
        let rep1 = data.quizz[diff][x].propositions[1];
        let rep2 = data.quizz[diff][x].propositions[2];
        let rep3 = data.quizz[diff][x].propositions[3];

        // la bonne reponse

        let corr = data.quizz[diff][x].réponse;

        // l'anecdote

        let anec = data.quizz[diff][x].anecdote;

        // affichage du text des question avec reponse

        $("#test1").hide();
        $("#test2").show();

        // affichage theme et difficulter

        html1 +=
          "<p class='text-center text-primary  col-12'>" +
          h2 +
          " - " +
          "Niveau " +
          diff +
          "</p></br>";

        // affichage question

        html1 +=
          "<p class='text-center text-primary col-12'>" +
          "Question " +
          "<span class='color1'>" +
          id +
          "</span>" +
          " : " +
          "<span class='color2 text-primary'>" +
          data.quizz[diff][x].question +
          "</span>" +
          "</br><div class='text-center' id='anec'></div>";

        // les 4 reponse possible

        html1 +=
          "<div id='area' class='justify-content-around row col-12'>" +
          "<p id='drag1'  class='resp col-3' >" +
          rep0 +
          "</p>" +
          "<p id='drag2'  class='resp col-3' >" +
          rep1 +
          "</p>" +
          "<p id='drag3'  class='resp col-3' >" +
          rep2 +
          "</p>" +
          "<p id='drag4'  class='resp col-3' >" +
          rep3 +
          "</p></div>";

        // dropzone

        html1 +=
          "<div class='col-12 mx-auto' id='drop'></div>";

        $("#test2").html(html1);

        // zone de text draggable avec option timer

        $("#drag1").draggable({
          cursor:
            "url(../img/cursor_main_mini.png),auto",

          revert: "invalid",
          revertDuration: 300,
        });
        $("#drag2").draggable({
          cursor:
            "url(../img/cursor_main_mini.png),auto",

          revert: "invalid",
          revertDuration: 300,
        });
        $("#drag3").draggable({
          cursor:
            "url(../img/cursor_main_mini.png),auto",

          revert: "invalid",
          revertDuration: 300,
        });
        $("#drag4").draggable({
          cursor:
            "url(../img/cursor_main_mini.png),auto",

          revert: "invalid",
          revertDuration: 300,
        });

        // drop zone

        $("#drop").droppable({
          classes: {
            "ui-droppable-hover": "ui-state-hover",
          },

          drop: function (event, ui) {
            // recuperation reponse dans la zone drop

            let corr1 = ui.draggable.text();

            // verification de la reponse donner par l'utilisateur

            if (corr == corr1) {
              // gestion score

              score = score + 1;

              // gestion boucle

              x = x + 1;

              // affichage anecdote si reponse bonne

              $("#anec").append("<p>Anecdote : " + anec + "</p>");

              $("#anec").css({
                background: "rgb(239 116 16)",
                borderRadius: "15px",
              });

              // blocage des text draggable

              $("#drag1").draggable({
                disabled: true,
              });
              $("#drag2").draggable({
                disabled: true,
              });
              $("#drag3").draggable({
                disabled: true,
              });
              $("#drag4").draggable({
                disabled: true,
              });
              $(this).css("background", "rgb(0,200,0)");
              $(ui.draggable).css({
                background: "green",
              });
              $("#testbtn").show();
            } else {
              // gestion boucle

              x = x + 1;

              $(this).css("background", "#e55039");

              // mise en couleur de la bonne reponse en cas d'echec

              $("p:contains(" + corr + ")").css("background-color", "green");

              // blocage des text draggable

              $("#drag1").draggable({
                disabled: true,
              });
              $("#drag2").draggable({
                disabled: true,
              });
              $("#drag3").draggable({
                disabled: true,
              });
              $("#drag4").draggable({
                disabled: true,
              });
              $("#testbtn").show();
            }
          },
        });
      });

      // initialisation 1er bouton suivant

      $("#testbtn").on("click", function () {
        $("#testbtn").hide();

        html1 = "";
        $("#test2").html(html1);

        // numero de la question

        id = data.quizz[diff][x].id;

        // les 4 proposition de reponse

        rep0 = data.quizz[diff][x].propositions[0];
        rep1 = data.quizz[diff][x].propositions[1];
        rep2 = data.quizz[diff][x].propositions[2];
        rep3 = data.quizz[diff][x].propositions[3];

        // la bonne reponse

        corr = data.quizz[diff][x].réponse;

        // l'anecdote

        anec = data.quizz[diff][x].anecdote;

        // affichage du text des question avec reponse

        html1 +=
          "<p class='text-center text-primary col-12'>" +
          h2 +
          " - " +
          "Niveau " +
          diff +
          "</p></br>";
        html1 +=
          "<p class='text-center text-primary col-12'>" +
          "Question " +
          "<span class='color1'>" +
          id +
          "</span>" +
          " : " +
          "<span class='color2 text-primary'>" +
          data.quizz[diff][x].question +
          "</span>" +
          "</br><div class='text-center text-primary' id='anec'></div>";

        // les 4 reponse possible

        html1 +=
          "<div id='area' class='justify-content-around row col-12'>" +
          "<p id='drag1'  class='resp col-3' >" +
          rep0 +
          "</p>" +
          "<p id='drag2'  class='resp col-3' >" +
          rep1 +
          "</p>" +
          "<p id='drag3'  class='resp col-3' >" +
          rep2 +
          "</p>" +
          "<p id='drag4'  class='resp col-3' >" +
          rep3 +
          "</p></div>";

        // drop zone

        html1 +=
          "<div class='d-flex justify-content-center text-primary col-12 mx-auto' id='drop'></div>";

        $("#test2").html(html1);

        // zone text draggable

        $("#drag1").draggable({
          cursor:
            "url(../img/cursor_main_mini.png),auto",

          revert: "invalid",
          revertDuration: 300,
        });
        $("#drag2").draggable({
          cursor:
            "url(../img/cursor_main_mini.png),auto",

          revert: "invalid",
          revertDuration: 300,
        });
        $("#drag3").draggable({
          cursor:
            "url(../img/cursor_main_mini.png),auto",

          revert: "invalid",
          revertDuration: 300,
        });
        $("#drag4").draggable({
          cursor:
            "url(../img/cursor_main_mini.png),auto",

          revert: "invalid",
          revertDuration: 300,
        });

        // drop zone

        $("#drop").droppable({
          classes: {
            "ui-droppable-hover": "ui-state-hover",
          },

          drop: function (event, ui) {
            // recuperation reponse dans la zone drop

            let corr1 = ui.draggable.text();

            // verification de la reponse donner par l'utilisateur

            if (corr == corr1) {
              // ajout de +1 a x boucle

              x = x + 1;

              // gestion score

              score = score + 1;
              $("#anec").append("<p>Anecdote : " + anec + "</p>");

              $("#anec").css({
                background: "rgb(239 116 16)",
                borderRadius: "15px",
              });

              // blocage des text draggable

              $("#drag1").draggable({
                disabled: true,
              });
              $("#drag2").draggable({
                disabled: true,
              });
              $("#drag3").draggable({
                disabled: true,
              });
              $("#drag4").draggable({
                disabled: true,
              });
              $(this).css("background", "rgb(0,200,0)");
              $(ui.draggable).css({
                background: "green",
              });

              // restriction de la boucle a 9 tour

              if (x <= 9) {
                $("#testbtn").show();
              } else {
                $("#testbtn1").show();
              }
            } else {
              // gestion boucle

              x = x + 1;

              $(this).css("background", "#e55039");
              $("p:contains(" + corr + ")").css("background-color", "green");

              // blocage des text draggable

              $("#drag1").draggable({
                disabled: true,
              });
              $("#drag2").draggable({
                disabled: true,
              });
              $("#drag3").draggable({
                disabled: true,
              });
              $("#drag4").draggable({
                disabled: true,
              });

              // restriction de la boucle a 9 tour

              if (x <= 9) {
                $("#testbtn").show();
              } else {
                $("#testbtn1").show();
              }
            }
          },
        });
      });

      // initialisation bouton suivant derniere question

      $("#testbtn1").on("click", function () {
        $("#test3").show();
        $("#testbtn1").hide();
        $("#btnaccueil").show();
        let html3 = "";

        $("#test2").hide();

        //affichage theme et difficulter

        html3 +=
          "<p class='text-center col-12'>" +
          h2 +
          " - " +
          "Niveau " +
          diff +
          "</p>";
        html3 += "<p><h3 class='text-center'>Quizz terminé!!</h3></p></br>";

        // affichage score

        html3 +=
          "<p class='text-center'>" +
          nom +
          " , vous avez obtenu le score de " +
          score +
          "/10</br>";
        $("#test3").html(html3);
      });

      // initialisation bouton accueil retour au debut

      $("#btnaccueil").on("click", function () {
        // remise a zero pour nouveau quizz

        x = 0;
        score = 0;

        // affichage 1 er vue

        $("#test3").hide();
        $(".all").show();
        $("#btnaccueil").hide();
      });
    }, //fermuture success
  });
});
