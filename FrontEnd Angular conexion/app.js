(function() {
  var app = angular.module('userStore', []);

  app.controller('StoreController',function($scope, $http) {  
  // 

      $http.jsonp('http://localhost/BackEndGeoRiver2.0/public/API/Admin?callback=JSON_CALLBACK').success(function(data) 
    {

       console.log('entro: ' + data);
        $scope.users = data;//así enviamos los posts a la vista

$scope.firstName = data.firstName;
    })

      .error(function(data, status,message) {
      console.log('Status: ' + status);
      console.log('datos: ' + data);
      console.log('ensaje: ' + message);
    });
  });


  ///////////////////////////



  app.controller('DeleteController',function($scope, $http) {  
  // 

      $http.jsonp('http://localhost/BackEndGeoRiver2.0/public/API/Admin?callback=JSON_CALLBACK').success(function(data) 
    {
    })
  
  });

  /////////////////////////


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

 var teachers= [{
      firstName: 'Luis',
      lastName: "Gomez",
      userName: "lgo@gmail.com",
      password: "********",
      program: "Ambiental",
      color: '#CCC',
      faces: 14
    }, {
      firstName: 'Laura',
      lastName: "Ramirez",
      userName: "lau@gmail.com",
      password: "********",
      program: "Ambiental",
      color: '#CCC',
      faces: 14
    }, 
    {
      firstName: 'pedro',
      lastName: "Infante",
      userName: "pedroinfante@gmail.com",
      password: "********",
      program: "Ambiental",
      color: '#CCC',
      faces: 14
    }, 
    ];
})();
