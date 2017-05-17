'use strict';
/*
 * @module   sn.inputConfirm
 * @author   SOON_
 */
angular.module('sn.inputConfirm', [

])
/**
 * @example
    <input type='password'
           name='password_confirm'
           ng-model='password_confirm'
           sn-input-confirm='password'>
 * @constructor
 * @class snInputConfirm
 */
.directive('snInputConfirm',[
  function (){
    return {
      restrict: 'A',
      require: 'ngModel',
      link: function($scope, $element, attrs, ctrl){

        if (!ctrl || !attrs.snInputConfirm) return; // jshint ignore:line

        /**
         * @function validate
         */
        var validate = function validate() {
          var compare = $scope.$eval( attrs.snInputConfirm ),
              viewValue = ctrl.$viewValue;

          if ( compare !== viewValue ){
            ctrl.$setValidity('inputConfirm', false);
            return viewValue;
          } else {
            ctrl.$setValidity('inputConfirm', true);
            return viewValue;
          }
        };

        ctrl.$parsers.unshift(validate);
        $scope.$watch(attrs.snInputConfirm, validate);

      }
    };
  }
]);
