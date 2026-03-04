# Core Syntax 

try {
    // Code that may throw an exception
} catch (ExceptionType $e) {
    // Handle the exception
} finally {
    // Always runs (optional)
}

# Generic Exception
try {
    riskyFunction();
} catch (Exception $e) {
    echo $e->getMessage();
}

# Multitudes 
try {
    doSomething();
} catch (InvalidArgumentException $e) {
    // handle bad input
} catch (RuntimeException $e) {
    // handle runtime failure
} catch (Exception $e) {
    // fallback
}

# Multi-catch
try {
    doThing();
} catch (LogicException | RuntimeException $e) {
    logError($e);
}
