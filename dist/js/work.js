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
                title: "Jami3aty",
                tag: 'Management',
                date: 'May 2018',
                image: 'jami3aty.png',
                link: 'https://github.com/ismailBourbie/jami3aty'
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