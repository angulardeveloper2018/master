app.service('notification', function($mdToast){
   this.Message = function(message, type) {

        var toast = $mdToast.simple()
          .hideDelay(3000)
          .textContent(message)
          .action('X')
          .highlightAction(false)
          .highlightClass('md-accent')// Accent is used by default, this just demonstrates the usage.
          .position('top right')
          .capsule(false)
          .toastClass(type);

        $mdToast.show(toast).then(function(response) {
          if ( response == 'ok' ) {
            
          }
        });
      return true;
   }
});