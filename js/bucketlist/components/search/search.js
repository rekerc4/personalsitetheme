"use strict"; 

let searchCriteria = {
    templateUrl: 'http://localhost:8888/wordpress/wp-content/themes/daileyThemeHomeButton/js/bucketlist/components/search/search.html',
    controller: ["TicketService", "$scope", "$location", function(TicketService, $scope, $location) { 
        const vm = this;
        vm.data = null;
        vm.fdate = {
            value: new Date(2018, 8, 7)
        }
        vm.ldate = {
            value: new Date(2018, 9, 7)
        }
        vm.getData = (interest, city, fdate, ldate) => {
            TicketService.requestData(interest, city, fdate, ldate).then(()=> {
                $location.path("/event");
            });
        }
    }]
}
angular
    .module("bucketapp")
    .component("searchCriteria", searchCriteria); 
