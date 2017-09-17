### 什麼是 Test Double（測試替身）

- Dummy  
    Objects are passed around but never actually used. Usually they are just used to fill parameter lists.
- Fake  
    Objects actually have working implementations, but usually take some shortcut which makes them not suitable for production.
- Stub
    Stub provide canned answers to calls made during the test.
- Mock
    Mocks are pre-programmed with expectations which form a specification of the calls they are expected to receive.
- Spy
    Spies are stubs that also record some information based on how they were called.
