angular.module("app",[])
    .controller("Ctrl",function Ctrl($scope) {

        $scope.browsers = [
            {
                name: 'Thibault',
                total: 10.54,
                versions: [
                    {name: 'Sport', value: 09.00},
                    {name: 'Litterature', value: 10.97},
                    {name: 'Anglais', value: 11.66},
                ]
            },
            {
                name: 'Aurélie',
                total: 13.72,
                versions: [
                    {name: 'Francais', value: 12.00},
                    {name: 'Maths', value: 15.50},
                    {name: 'Anglais', value: 13.66},
                ]
            },
            {
                name: 'Paul',
                total: 13.16,
                versions: [
                    {name: 'Francais', value: 10.00},
                    {name: 'Maths', value: 12.00},
                    {name: 'Anglais', value: 17.50},
                ]
            },
        ];



    });