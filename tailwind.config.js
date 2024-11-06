module.exports = {
    mode: 'jit',
    content: ["./**/**.{php, js}"],
    theme: {
        extend: {
        colors:{
            'primary': '#1E1E1E',
            'action': '#ff6900',
            'blue': '#282b6d',
            'grey': '#f5f5f5',
            'borderGrey':'#d9d9d9',
            'grey2':'#777777',
        },
        backgroundColor: {
            'primary': '#1E1E1E',
            'action': '#ff6900',
            'grey': '#f5f5f5',
            'blue': '#282b6d',
            'black2': '#00000054'
        },
        height:{
            '70pc': '70%',
        },
        order: {
            none: '0',
            '1': '1',
            '2': '2'
        }
    },
    },
    plugins: [],
} 