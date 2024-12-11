<?php

use PHPUnit\Framework\TestCase;

final class MannualyRegistUserUseCaseTest extends TestCase
{
    private MannualyRegistUserUseCase $useCase;
    private $mockBasicInfoRegister;
    private $mockMailSender;

    protected function setUp(): void
    {
        // モック化しておかないと、テストのたびに実行されてしまう
        // テストの実行速度が遅くなる
        // メールが毎回送信される
        $this->mockBasicInfoRegister = $this->createMock(BasicInfoRegister::class);
        $this->mockMailSender = $this->createMock(MailSender::class);
        
        $this->useCase = new MannualyRegistUserUseCase(
            $this->mockBasicInfoRegister,
            $this->mockMailSender
        );
    }

    // MannualyRegistUserUseCaseではregistBasicInfo()とsendMail()が1回ずつ呼ばれることを確認すればテストOK
    public function testHandleCallsRegistBasicInfoAndSendMail(): void
    {
        // registBasicInfoが1回だけ呼ばれることを確認
        $this->mockBasicInfoRegister
            ->expects($this->once())
            ->method('registBasicInfo');

        // sendMailが1回だけ呼ばれることを確認
        $this->mockMailSender
            ->expects($this->once())
            ->method('sendMail');

        // 実行
        // BasicInfoRegisterとMailSenderはMockを渡しているので、実際の処理は行われない
        $this->useCase->handle();
    }
}