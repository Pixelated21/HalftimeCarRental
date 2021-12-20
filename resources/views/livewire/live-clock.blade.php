<div x-data="
{
    clock: {
        days: '00',
        hours: '00',
        minutes: '00',
        seconds: '00',
        remaining: 1000
    },
    time: new Date(),
    calculateTimeLeft: function () {
        const seconds = this.time.getSeconds()
        const minutes = this.time.getMinutes()
        const hours = this.time.getHours()
        return {
            hours,
            minutes,
            seconds

        };
    },
    startCountdown: function () {
        const countdownIntervalFunction = setInterval(() => {
            const timeLeft = this.calculateTimeLeft();
            this.clock = timeLeft;

        }, 1000);
    }
}
"

     x-init="startCountdown()"

 class="h-screen flex justify-center items-center">
<div class="h-96 w-1/2 bg-gray-300 flex justify-evenly items-center rounded-md">
        <span class="h-20 w-20 rounded justify-center flex items-center text-4xl bg-gray-500"
              x-text="clock.hours"></span>
    <span class="h-20 w-20 rounded justify-center flex items-center text-4xl bg-gray-500"
          x-text="clock.minutes"></span>
    <span class="h-20 w-20 rounded justify-center flex items-center text-4xl bg-gray-500"
          x-text="clock.seconds"></span>
</div>
</div>
