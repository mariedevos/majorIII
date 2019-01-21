export default class IntroScene extends Phaser.Scene {
  constructor() {
    super({
      key: `intro`
    });
  }


  preload() {
    this.button;
  }

  create() {



    // this.physics.add.this.button = this.add.image(
    //   this.sys.game.config.width / 2,
    //   this.sys.game.config.height / 2,
    //   `intro`
    // )
    // .setInteractive()
    // .on("pointerover", () => this.startbtn.setTint(14474460)) //hover
    // .on("pointerout", () => this.startbtn.setTint()) // nt hover state
    // .on("pointerdown", () => {
    //   this.scene.start(`game`);
    // });

    this.spaceKey = this.input.keyboard.addKey(
      Phaser.Input.Keyboard.KeyCodes.SPACE
    );


    this.add.image(700/2, 600/2, 'intro');
    console.log('In de introo');
    // this.add.image(480, 210, "sprite", "btn-highscore.png");
    // this.add.image(240, 210, "sprite", "btn-play.png");

    this.physics.add.button = this.add.image(
      240, 210, "sprite", "btn-play.png"
    )
    .setInteractive()

    .on("pointerdown", () => {
      this.scene.start(`game`);
    });

    this.physics.add.button = this.add.image(
      480, 210, "sprite", "btn-highscore.png"
    )
    .setInteractive()

    .on("pointerdown", () => {
      this.scene.start(`scores`);
    });

  }

  update() {
    if (this.spaceKey.isDown) {
      this.scene.start(`game`);
    }
  }
}
