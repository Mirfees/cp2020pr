document.addEventListener('DOMContentLoaded', function (){
    const updateCharacterTabs = new Tabs('.character-update__wrapper', 'character-update__tab', 'character-update__content');
    const accountTabs = new Tabs('.account__wrapper', 'account__tab', 'account__content');

    const accordionsContainers = document.querySelectorAll('.character-update__accordion');

    const wrapButton = document.querySelector('.skills .wrap');
    const unwrapButton = document.querySelector('.skills .unwrap');

    if (wrapButton && unwrapButton) {
        const accordionContent = document.querySelectorAll('.character-update__accordion-content');
        wrapButton.addEventListener('click', () => {
            accordionContent.forEach(container => {
                container.classList.add('active');
            });
        });

        unwrapButton.addEventListener('click', () => {
            accordionContent.forEach(container => {
                container.classList.remove('active');
            });
        });
    }

    document.querySelectorAll('.input-file input[type=file]').forEach(function(input) {
        input.addEventListener('change', function() {
            let file = this.files[0];
            this.closest('.input-file').querySelector('.input-file-text').innerHTML = file.name;
        });
    });

    const requiredSkills = {
        'solo': ['combat_sense', 'awareness_notice', 'handgun', 'brawling', 'material_arts_one', 'material_arts_two', 'material_arts_three', 'melee', 'riffle', 'athletics', 'submachinegun', 'stealth'],
        'rocker': ['charismatic_leadership' ,'awareness_notice', 'perform', 'wardrobe_style', 'composition', 'brawling', 'play_instruments', 'streetwise', 'persuasion_fast_talk', 'seduction'],
        'netrunner': ['interface', 'awareness_notice', 'basic_tech', 'education', 'system_knowledge', 'cybertech', 'cyberdeck', 'composition', 'electronics', 'programming'],
        'journalist': ['credibility', 'awareness_notice', 'composition', 'education', 'persuasion_fast_talk', 'human_perception', 'social', 'photo_and_film', 'interview'],
        'nomad': ['family', 'awareness_notice', 'endurance', 'melee', 'driving', 'riffle', 'basic_tech', 'wild_survival', 'brawling', 'athletics'],
        'fixer': ['streetdeal', 'awareness_notice', 'forgery', 'handgun', 'brawling', 'melee', 'pick_lock', 'pick_pocket', 'intimidate', 'persuasion_fast_talk'],
        'cop': ['authority', 'awareness_notice', 'handgun', 'human_perception', 'athletics', 'education', 'brawling', 'melee', 'interrogation', 'streetwise'],
        'corporate': ['resources', 'awareness_notice', 'human_perception', 'education', 'library_search', 'social', 'persuasion_fast_talk', 'stock_market', 'wardrobe_style', 'personal_grooming'],
        'technic': ['jury_rig', 'awareness_notice', 'basic_tech', 'cybertech', 'teaching', 'education', 'electronics'],
        'med-technic': ['medical_tech', 'awareness_notice', 'basic_tech', 'diagnosis_illness', 'education', 'cryotank_operation', 'library_search', 'pharmacuticals', 'zoology', 'human_perception'],
    };

    accordionsContainers.forEach(function (accordionContainer) {
        new Accordion(accordionContainer, '.character-update__accordion-title', '.character-update__accordion-content');
    });

    const characterForm = document.querySelector('.character-update__wrapper');
    if(characterForm) {
        const roleWrapper = characterForm.querySelector('.general');
        const roleInputs = roleWrapper.querySelectorAll('input[type="radio"]');

        if (characterForm.classList.contains('view')) {
            characterForm.querySelectorAll('input').forEach(input => {
                input.disabled = 'disabled';
            });
            characterForm.querySelectorAll('textarea').forEach(textarea => {
                textarea.disabled = 'disabled';
            });
            characterForm.querySelectorAll('button').forEach(button => {
                button.disabled = 'disabled';
            });
        }

        roleInputs.forEach(input => {
            input.addEventListener('input', () => {
                const role = input.id;
                const requiredSkill = requiredSkills[role];
                const inputs = characterForm.querySelectorAll('input');

                inputs.forEach( input => {
                    input.classList.remove('required');
                });

                inputs.forEach(input => {
                    if (requiredSkill.includes(input.name)) {
                        input.classList.add('required');
                    }
                });
            });
        });
    }

});

class Tabs {
    constructor(tabsContainerSelector, tabTitleClass, tabClass) {
        this.tabsContainer = document.querySelector(tabsContainerSelector);
        this.tabTitleClass = tabTitleClass;
        this.tabClass = tabClass;

        if (this.tabsContainer) {
            this.tabsContainer.addEventListener('click', (e) => {
                let target = e.target;

                if(target.closest(`.${this.tabTitleClass}`)) {
                    let tabTitle = (target.closest(`.${this.tabTitleClass}`));
                    let tabTitles = this.tabsContainer.querySelectorAll(`.${this.tabTitleClass}`);
                    let tabId = tabTitle.dataset.tabId;
                    let tab = this.tabsContainer.querySelector('#' + tabId);
                    let tabs = this.tabsContainer.querySelectorAll(`.${this.tabClass}`);

                    tabTitles.forEach(title => {
                        title.classList.remove('active');
                    });

                    tabs.forEach(tab => {
                        tab.classList.remove('active');

                        if (tab.id === tabId) {
                            tab.classList.add('active');
                        }
                    });

                    tabTitle.classList.add('active');
                }
            });
        }
    }
}

class Accordion {
    constructor(accordionContainer, accordionTitleClass, accordionContentClass) {
        this.accordionContainer = accordionContainer;
        this.accordionTitle = accordionContainer.querySelector(accordionTitleClass);
        this.accordionContent = accordionContainer.querySelector(accordionContentClass);

        this.accordionTitle.addEventListener('click', () => {
            this.accordionContent.classList.toggle('active');
        });

    }
}