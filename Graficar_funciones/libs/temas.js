$("#selector de temas").treeSelect({
    mainTitle: 'x main cat',
    datatree: [{
        title: 'text1',
        value: 1,
        child: []
    }, {
        title: 'text2',
        value: 2,
        child: []
    },
        {
            title: 'text3',
            value: 3,
            child: [
                {
                    title: 'lv2 text3',
                    value: 3,
                    child: []
                },
                {
                    title: 'lv2 text5',
                    value: 5,
                    child: []
                }
            ]
        },
    ]
});