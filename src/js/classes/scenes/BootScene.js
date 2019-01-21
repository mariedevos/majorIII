export default class BootScene extends Phaser.Scene {
  constructor() {
    super({
      key: `boot`
    });
  }

  init() {}

  preload() {}

  create() {

    console.log('In de bootscene');
    this.scene.start(`preload`);
  }

  update() {}
}
