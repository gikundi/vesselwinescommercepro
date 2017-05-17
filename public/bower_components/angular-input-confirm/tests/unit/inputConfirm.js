'use strict';

describe('sn.inputConfirm', function() {
  var element, $scope, $rootScope, $templateCache, isolatedScope;

  beforeEach(module('sn.inputConfirm'));

  beforeEach(inject(function (_$rootScope_, $compile, $injector) {
    $rootScope = _$rootScope_;

    $scope = $rootScope.$new();

    element = '<input type="password" name="password_confirm" ng-model="password_confirm" sn-input-confirm="password">';

    element = $compile(element)($scope);
    $scope.$digest();

    isolatedScope = element.isolateScope();

  }));

  it('should render directive', function(){
    expect(element.html()).toContain($rootScope.article.title);
  });

});
