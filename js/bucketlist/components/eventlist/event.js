"use strict";

let eventList = {
    bindings: "",
    templateUrl: "http://localhost:8888/wordpress/wp-content/themes/daileyThemeHomeButton/js/bucketlist/components/eventlist/event.html",
    controller: ["TicketService", "$location", function (TicketService, $location) {
        const vm = this;
        vm.show = null;
        vm.searchInfo = TicketService.getObject();
        vm.favClick = (index) => {
            TicketService.bucketlist.push(index);
        }
        vm.moreInfo = (index) => {
            vm.show = index;
        }
        vm.closeInfo = () => {
            vm.show = null;
        }
        vm.changePath = (path) => {
            $location.path(path);
        }

    }]

}

angular
    .module("bucketapp")
    .component("eventList", eventList);