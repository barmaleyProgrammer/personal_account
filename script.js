const blockcard = (event) => {
    const isblock = event.target.getAttribute('data-blocked');
    const card_num = event.target.getAttribute('data-card-num');

    let newIsBlock;
    let newHtml;
    let newTitle;

    if (isblock === 'true') {
        newIsBlock = false;
        newHtml = 'так';
        newTitle = 'розблокувати';
    } else {
        newIsBlock = true;
        newHtml = 'ні';
        newTitle = 'блокувати';
    }

    return window.fetch(`block_card.php?block=${isblock}&card=${card_num}`).then((res) => {
        if (res.status === 200) {
            event.target.setAttribute('data-blocked', newIsBlock);
            event.target.setAttribute('title', newTitle);
            event.target.textContent = newHtml;
        }

        return false;
    });
}

const charge = (event) => {
    event.preventDefault();

    const card_code = event.target.children.card_code.value;
    const summa = event.target.children.summa.value;
    const product_code = event.target.children.product_code.value;
    // debugger;
    console.log(card_code, summa, product_code);
    const options = {
        method: 'POST',
        headers: {
            'Content-type': 'application/x-www-form-urlencoded; charset=UTF-8'
        },
        body: `card_code=${card_code}&summa=${summa}&product_code=${product_code}`
    };
    return window.fetch('card_charge.php', options).then((res) => {
        if (res.status === 200) {
            // event.target.setAttribute('data-blocked', newIsBlock);
            // event.target.setAttribute('title', newTitle);
            // event.target.textContent = newHtml;
        }

        return false;
    });
}

//////////////////////////////////////////////////////////////////////////////
const showAddCardDialog = document.getElementById('showAddCardDialog');
const addCardDialog = document.getElementById('addCardDialog');
showAddCardDialog.addEventListener('click', () => {
    addCardDialog.showModal();
});
addCardDialog.addEventListener('click', (e) => {
    const dialogDimensions = e.target.getBoundingClientRect();
    if (
        e.clientX < dialogDimensions.left ||
        e.clientX > dialogDimensions.right ||
        e.clientY < dialogDimensions.top ||
        e.clientY > dialogDimensions.bottom
    ) {
        e.target.close();
    }
});
