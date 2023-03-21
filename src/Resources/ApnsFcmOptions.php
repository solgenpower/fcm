<?php

namespace NotificationChannels\Fcm\Resources;

class ApnsFcmOptions implements FcmResource
{
    /**
     * @var string|null
     */
    protected $analyticsLabel;

    /**
     * @var string|null
     */
    protected $image;

    public function getAnalyticsLabel(): ?string
    {
        return $this->analyticsLabel;
    }

    public function setAnalyticsLabel(?string $analyticsLabel): self
    {
        $this->analyticsLabel = $analyticsLabel;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return static
     */
    public static function create(): self
    {
        return new self;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(): array
    {
        return [
            'analytics_label' => $this->getAnalyticsLabel(),
            'image' => $this->getImage(),
        ];
    }
}
