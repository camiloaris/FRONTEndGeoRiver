(function() {
  var app = angular.module('gemStore', []);

  app.controller('StoreController', function() {
    this.users = Salidas;
    this.activity=Actividad;
  }
  );



  app.controller("TabController", function() {
    this.tab = 1;

    this.isSet = function(checkTab) {
      return this.tab === checkTab;
    };

    this.setTab = function(setTab) {
      this.tab = setTab;
    };
  });


  app.controller("ReviewController", function(){

    this.review = {};

    this.addReview = function(product){
      this.review.createdOn = Date.now();
      product.reviews.push(this.review);
      this.review = {};
    };
  });

  var Salidas = [{
      id:'1',
      program: 'Ingenieria Ambiental',
      subject: "Ecologia",
      Excursion: "Amazonas",
      Date: "07/04/2017",
      Description: "Salida Amazonas 2017 Informe Abejas",
      color: '#CCC',
      faces: 14
    }, 
    {
      id:'2',
      program: 'Ingenieria Ambiental',
      subject: "Ecologia II",
      Excursion: "San Andres",
      Date: "07/04/2014",
      Description: "Salida San Andres 2017 Informe Arrecifes",
      color: '#CCC',
      faces: 14
    },
    { 
      id:'3',
      program: 'Ingenieria Ambiental',
      subject: "Sig",
      Excursion: "Antioquia",
      Date: "07/04/2015",
      Description: "Salida Antioquia Informe Empresas",
      color: '#CCC',
      faces: 14
    },
    ];

  var Actividad = [{
      Activity: 'Actividad 1',
      Description: "Salida Amazonas 2017 Informe Abejas",
      color: '#CCC',
      faces: 14
    }, 
    {
      Activity: 'Actividad 2',
      Description: "Muestras de Agua",
      color: '#CCC',
      faces: 14
    }, 
   {
      Activity: 'Actividad 3',
      Description: "Fauna y flora",
      color: '#CCC',
      faces: 14
    }, 
   
   
    ];





})();






 