export const saveScore = (name, score) => {
  const data = new FormData();
  data.append('name', name);
  data.append('score', score);
  data.append('action', 'insertScore');

  return fetch('index.php?page=score', {
    headers: new Headers({Accept: `application/json`}),
    method: 'post',
    body: data
  })
    .then(response => {
      if (response.ok) {
        return response.json();
      }
    })
    .then(data => {
      return data;
    });
};

export const getScores = async () => {
  const response = await fetch('index.php?page=score', {
    headers: new Headers({Accept: `application/json`})
  });
  const scores = await response.json();
  return scores;
};
