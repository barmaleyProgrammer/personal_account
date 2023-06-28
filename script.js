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
    console.log(event);

    const card_code = event.target.getAttribute('data-blocked');
    const summa = event.target.getAttribute('data-card-num');
    const product_code = event.target.getAttribute('data-card-num');

    // POST card_charge.php

    return false;
}
