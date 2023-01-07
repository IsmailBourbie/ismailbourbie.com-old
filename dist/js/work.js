function work() {
    return {
        'projects': [{
                title: "Younes Website",
                tag: 'Portfolio',
                date: 'Sep 2022',
                image: 'younes-portfolio.png',
                link: 'https://younescharfaoui.com/'
            },
            {
                title: "Drudz",
                tag: 'Health',
                date: 'Jun 2022',
                image: 'drudz.png',
                link: 'https://github.com/ismailBourbie/dz-drugs'
            },
            {
                title: "Personal Website",
                tag: 'Portfolio',
                date: 'Aug 2021',
                image: 'personal-website.png',
                link: 'https://github.com/ismailBourbie/portfolio'
            },
            {
                title: "Online Shop",
                tag: 'E-commerce',
                date: 'Feb 2023',
                image: 'online-shop.png',
                link: 'https://github.com/ismailBourbie/online-shop'
            },
            {
                title: "Tic-Tac-Toe",
                tag: 'Game',
                date: 'Apr 2018',
                image: 'tic-tac-toe.png',
                link: 'https://github.com/ismailBourbie/tic-Tac-Toe'
            },
            {
                title: "Covid19Test",
                tag: 'Health',
                date: 'Apr 2020',
                image: 'covid19test.png',
                link: 'https://github.com/IsmailBourbie/Covid19QuestDz'
            },
            {
                title: "Uik-Library",
                tag: 'University',
                date: 'Jul 2019',
                image: 'uiklibrary.png',
                link: 'https://github.com/IsmailBourbie/uiklibrary'
            },
        ],
        selectedProjectImage: null,
        baseImageUrl: '/images/projects/',
        showProject(index) {
            this.selectedProjectImage = this.projects[index].image;
        },
        hideProject() {
            this.selectedProjectImage = null;
        }
    }
}