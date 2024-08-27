const { exec } = require('child_process');

module.exports = (req, res) => {
  exec('php -S localhost:8000 -t public', (error, stdout, stderr) => {
    if (error) {
      res.status(500).send(stderr);
    } else {
      res.send(stdout);
    }
  });
};
