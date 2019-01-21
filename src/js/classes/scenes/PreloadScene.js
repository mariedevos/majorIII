import '../../../assets/img/sky.png';
import '../../../assets/img/intro.png';
import '../../../assets/img/scores.png';
import '../../../assets/img/gameover.png';

// import '../../../assets/img/spritesheet.png';




export default class PreloadScene extends Phaser.Scene {
  constructor() {
    super({
      key: `preload`
    });
  }

  init() {}

  preload() {
    this.preloader = this.add.graphics();
    this.load.image('sky', `./assets/img/sky.png`);
    this.load.image('score', `./assets/img/scores.png`);
    this.load.image('gameover', `./assets/img/gameover.png`);
    this.load.image('intro', `./assets/img/intro.png`);

    this.load.atlas(
      `sprite`,
      `assets/img/spritesheet.png`,
      `assets/img/spritesheet.json`
    );
  }

  create() {
    console.log('In de sky');
    this.scene.start(`intro`);
  }

  onProgress() {}

  onComplete() {}

  update() {}
}
