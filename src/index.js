require('./styles.css');
// {
//   const $filterForm = document.querySelector(`.form`),
//     $acts = document.querySelector(`.programma`);

//   const init = () => {
//     if ($filterForm) {
//       $filterForm.addEventListener(`submit`, handleSubmitFilterForm);
//     }
//   };

//   const handleLoadPlayers = data => {
//     console.log(data);
//     const $programma = document.querySelector('.programma');
//     $programma.innerHTML = ``;
//     for (const property in data) {
//       if (data.hasOwnProperty(property)) {
//         // Do things here
//         const $li = createPlayerListItem(data[property]);
//         $programma.appendChild($li);
//       }
//     }

//     // $acts.innerHTML = data
//     //   .map(events => createPlayerListItem(events))
//     //   .join(``);
//   };

//   const createPlayerListItem = events => {
//     const $li = document.createElement('li');
//     $li.innerHTML =  `
//       <img  class='foto' src="assets/img/<?php echo ${events['foto']}.jpg" alt="" height="200px">
//     >`;
//     return $li;
//   };

//   const handleSubmitFilterForm = e => {
//     console.log('submit');
//     e.preventDefault();
//     const qs = new URLSearchParams([
//       ...new FormData($filterForm).entries()
//     ]).toString();
//     fetch(`${$filterForm.getAttribute('action')}?${qs}`, {
//       headers: new Headers({
//         Accept: `application/json`
//       }),
//       method: 'get'
//     })
//       .then(r => r.json())
//       .then(data => handleLoadPlayers(data));
//     window.history.pushState(
//       {},
//       '',
//       `${window.location.href.split('?')[0]}?${qs}`
//     );
//   };

//   init();
// }
