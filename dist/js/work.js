function work() {
    return {
        'projects': [{
                title: "Younes Portfolio",
                tag: 'Portfolio',
                date: 'Sep 2022',
                image: 'younes-portfolio.png'
            },
            {
                title: "Drudz",
                tag: 'Health',
                date: 'Jun 2022',
                image: 'drudz.png'
            },
            {
                title: "Jami3aty",
                tag: 'Management',
                date: 'May 2018',
                image: 'younes-portfolio.png'
            },
            {
                title: "Online Shop",
                tag: 'E-commerce',
                date: 'Feb 2023',
                image: 'online-shop.png'
            },
            {
                title: "Tic-Tac-Toe",
                tag: 'Game',
                date: 'Ap 2018',
                image: 'tic-tac-toe.png'
            },
        ],
        selectedProjectImage: null,
        baseImageUrl: '/images/projects/',
        showProject(index) {
            this.selectedProjectImage = this.projects[index].image;
            console.log(this.selectedProjectImage);
        },
        hideProject() {
            this.selectedProjectImage = null;
        }
    }
}