import {saveScore} from '../../functions/scores.js';

export default class GameOver extends Phaser.Scene {
  constructor() {
    super({
      key: `gameover`
    });
    console.log(`In de GameOverscene`);
  }

  preload() {

  }

  create() {
    const bg = this.add.image(
      this.sys.game.config.width / 2,
      this.sys.game.config.height / 2,
      `gameover`
    );

    this.score = localStorage.getItem(`score`);
    this.add.text(770, 220, `your score:${this.score}`, {
      fontSize: `30px`,
      fill: `#000000`
    });

    this.spaceKey = this.input.keyboard.addKey(
      Phaser.Input.Keyboard.KeyCodes.SPACE
    );

    this.createScoreSubmit();

    this.input.on('pointerdown', pointer => {
      const $name = document.querySelector(`.overlay__nameinput`).value;
      saveScore($name, this.score).then(data => {
        if (data.result === `ok`) {
          console.log('Score is goed doorgestuurd');
          const $input = document.querySelector(`.overlay`);
          $input.style.visibility = `hidden`;
        } else {
          this.add.text(220, 270, `please enter a name before saving`, {
            fontSize: `20px`,
            fill: `#000000`
          });

          console.log('Score is NIET goed doorgestuurd');
        }
      });
    });
  }

  createScoreSubmit() {
    const $input = document.querySelector(`.overlay`);
    $input.style.visibility = `visible`;
    $input.querySelector(`.overlay__nameinput`).value = ``;
    $input.querySelector(`.overlay__nameinput`).focus();
  }

  update() {
    if (this.spaceKey.isDown) {
      this.scene.start(`scores`);
    }
  }
}
