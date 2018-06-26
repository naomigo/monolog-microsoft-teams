<?php

namespace CMDISP\MonologMicrosoftTeams;

use Monolog\Logger;

class TeamsLogChannel
{
    /**
     * @param array $config
     *
     * @return \Psr\Log\LoggerInterface
     */
    public function __invoke(array $config)
    {
        $level = !empty($config['level']) ? $config['level'] : Logger::DEBUG;
        return new TeamsLogger($config['url'], $level);
    }
}
