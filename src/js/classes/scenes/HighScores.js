import {getScores} from '../../functions/scores';

export default class HighScores extends Phaser.Scene {
  constructor() {
    super({
      key: 'scores'
    });
  }
  preload() {
  }
  create() {
    const bg = this.add.image(
      this.sys.game.config.width / 2,
      this.sys.game.config.height / 2,
      `score`
    );

    getScores().then(data => {
      this.createScoreFields(data);
    });

    this.spaceKey = this.input.keyboard.addKey(
      Phaser.Input.Keyboard.KeyCodes.SPACE
    );

    const $input = document.querySelector(`.overlay`);
    $input.style.visibility = `hidden`;
  }

  createScoreFields(data) {
    const x = this.sys.game.config.width / 2;
    let y = 200;
    let i = 1;
    data.forEach(player => {
      this.add
        .text(x, y, `${i ++}.${player.name} - ${player.score}`, {
          color: `#4E7E93`
        })
        .setOrigin(0.5, 0.5);
      y += 20;
    });
  }

  update() {
    if (this.spaceKey.isDown) {
      this.scene.start(`boot`);
    }
  }
}


