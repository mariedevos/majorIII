import { saveScore } from "../../functions/scores.js";

let gameOver = false;

export default class GameScene extends Phaser.Scene {
  constructor() {
    super({
      key: `game`
    });
  }
  init() {
    // this.score = 0;
    // this.name = "Marie";
    this.paddle;
    this.presents;
    this.scoreText;
    this.presents;

  }

  preload() {}

  create() {
    this.physics.world.setBoundsCollision(true, true, true, false);



    this.add.image(700 / 2, 600 / 2, "sky");

    this.createScore();

    this.presents = this.physics.add.staticGroup({
      key: 'sprite', frame: [ 'kado1.png', 'kado2.png', 'kado3.png' ],
      frameQuantity: 1,
      gridAlign: { width: 10, height: 6, cellWidth: 150, cellHeight: 32, x: 220, y: 100 }
  });




    this.ball = this.physics.add
      .image(400, 500, "sprite", "ball1.png")
      .setCollideWorldBounds(true)
      .setBounce(1);
    this.ball.setData("onPaddle", true);

    this.paddle = this.physics.add
      .image(300, 500, "sprite", "paddle.png")
      .setImmovable();

      this.physics.add.collider(this.ball, this.presents, this.hitPresent, null, this);
      this.physics.add.collider(this.ball, this.paddle, this.hitPaddle, null, this);

    this.input.on(
      "pointermove",
      function(pointer) {

        this.paddle.x = Phaser.Math.Clamp(pointer.x, 2, 748);

        if (this.ball.getData("onPaddle")) {
          this.ball.x = this.paddle.x;
        }
      },
      this
    );

    this.input.on(
      "pointerup",
      function(pointer) {
        if (this.ball.getData("onPaddle")) {
          this.ball.setVelocity(-75, -300);
          this.ball.setData("onPaddle", false);
        }
      },
      this
    );


  }


  resetBall() {
    this.ball.setVelocity(0);
    this.ball.setPosition(this.paddle.x, 500);
    this.ball.setData("onPaddle", true);
  }


  hitPresent(ball, present) {

    this.score += 1;
    this.scoreTextField.setText(`${this.score}`);
    present.disableBody(true, true);

    if (this.presents.countActive() === 0)
    {
      this.scene.start(`gameover`);

        // this.resetLevel();
    }
  }

  createScore() {
    this.scoreTextField = this.add.text(600, 255, `0`, {
      fontSize: `20px`,
      fill: `#000000`
    });

    this.score = 0;
  }


  update() {
    {
      if (this.ball.y > 600) {
        this.resetBall();
      }
    }

    // if (!gameOver) {
    //   this.score += 10;
    //   this.scoreTextField.setText(`${Math.round(this.score * 100) / 100} m`);
    // }
    // if (gameOver) {
    //   console.log(this.name);

    //   saveScore(this.name, this.score).then(data => {
    //     if (data.result === `ok`) {
    //       console.log("Score is goed doorgestuurd");
    //       const data = [this.name, this.score.toString()];
    //       this.scene.start(`scores`, data);
    //     } else {
    //       console.log("Score is NIET goed doorgestuurd");
    //     }
    //   });
    // }
  }
}
