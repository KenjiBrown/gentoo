/* Autoloader for dev-php/phpunit and its dependencies */

$include_dir = '/usr/share/php';

if (!class_exists('Fedora\\Autoloader\\Autoload', false)) {
	require_once "${include_dir}/Fedora/Autoloader/autoload.php";
}

\Fedora\Autoloader\Autoload::addClassMap(
[
'phpunit\\exception' => '/Exception.php',
'phpunit\\framework\\assert' => '/Framework/Assert.php',
'phpunit\\framework\\assertionfailederror' => '/Framework/Exception/AssertionFailedError.php',
'phpunit\\framework\\codecoverageexception' => '/Framework/Exception/CodeCoverageException.php',
'phpunit\\framework\\constraint\\arrayhaskey' => '/Framework/Constraint/ArrayHasKey.php',
'phpunit\\framework\\constraint\\arraysubset' => '/Framework/Constraint/ArraySubset.php',
'phpunit\\framework\\constraint\\attribute' => '/Framework/Constraint/Attribute.php',
'phpunit\\framework\\constraint\\callback' => '/Framework/Constraint/Callback.php',
'phpunit\\framework\\constraint\\classhasattribute' => '/Framework/Constraint/ClassHasAttribute.php',
'phpunit\\framework\\constraint\\classhasstaticattribute' => '/Framework/Constraint/ClassHasStaticAttribute.php',
'phpunit\\framework\\constraint\\composite' => '/Framework/Constraint/Composite.php',
'phpunit\\framework\\constraint\\constraint' => '/Framework/Constraint/Constraint.php',
'phpunit\\framework\\constraint\\count' => '/Framework/Constraint/Count.php',
'phpunit\\framework\\constraint\\directoryexists' => '/Framework/Constraint/DirectoryExists.php',
'phpunit\\framework\\constraint\\exception' => '/Framework/Constraint/Exception.php',
'phpunit\\framework\\constraint\\exceptioncode' => '/Framework/Constraint/ExceptionCode.php',
'phpunit\\framework\\constraint\\exceptionmessage' => '/Framework/Constraint/ExceptionMessage.php',
'phpunit\\framework\\constraint\\exceptionmessageregularexpression' => '/Framework/Constraint/ExceptionMessageRegularExpression.php',
'phpunit\\framework\\constraint\\fileexists' => '/Framework/Constraint/FileExists.php',
'phpunit\\framework\\constraint\\greaterthan' => '/Framework/Constraint/GreaterThan.php',
'phpunit\\framework\\constraint\\isanything' => '/Framework/Constraint/IsAnything.php',
'phpunit\\framework\\constraint\\isempty' => '/Framework/Constraint/IsEmpty.php',
'phpunit\\framework\\constraint\\isequal' => '/Framework/Constraint/IsEqual.php',
'phpunit\\framework\\constraint\\isfalse' => '/Framework/Constraint/IsFalse.php',
'phpunit\\framework\\constraint\\isfinite' => '/Framework/Constraint/IsFinite.php',
'phpunit\\framework\\constraint\\isidentical' => '/Framework/Constraint/IsIdentical.php',
'phpunit\\framework\\constraint\\isinfinite' => '/Framework/Constraint/IsInfinite.php',
'phpunit\\framework\\constraint\\isinstanceof' => '/Framework/Constraint/IsInstanceOf.php',
'phpunit\\framework\\constraint\\isjson' => '/Framework/Constraint/IsJson.php',
'phpunit\\framework\\constraint\\isnan' => '/Framework/Constraint/IsNan.php',
'phpunit\\framework\\constraint\\isnull' => '/Framework/Constraint/IsNull.php',
'phpunit\\framework\\constraint\\isreadable' => '/Framework/Constraint/IsReadable.php',
'phpunit\\framework\\constraint\\istrue' => '/Framework/Constraint/IsTrue.php',
'phpunit\\framework\\constraint\\istype' => '/Framework/Constraint/IsType.php',
'phpunit\\framework\\constraint\\iswritable' => '/Framework/Constraint/IsWritable.php',
'phpunit\\framework\\constraint\\jsonmatches' => '/Framework/Constraint/JsonMatches.php',
'phpunit\\framework\\constraint\\jsonmatcheserrormessageprovider' => '/Framework/Constraint/JsonMatchesErrorMessageProvider.php',
'phpunit\\framework\\constraint\\lessthan' => '/Framework/Constraint/LessThan.php',
'phpunit\\framework\\constraint\\logicaland' => '/Framework/Constraint/LogicalAnd.php',
'phpunit\\framework\\constraint\\logicalnot' => '/Framework/Constraint/LogicalNot.php',
'phpunit\\framework\\constraint\\logicalor' => '/Framework/Constraint/LogicalOr.php',
'phpunit\\framework\\constraint\\logicalxor' => '/Framework/Constraint/LogicalXor.php',
'phpunit\\framework\\constraint\\objecthasattribute' => '/Framework/Constraint/ObjectHasAttribute.php',
'phpunit\\framework\\constraint\\regularexpression' => '/Framework/Constraint/RegularExpression.php',
'phpunit\\framework\\constraint\\samesize' => '/Framework/Constraint/SameSize.php',
'phpunit\\framework\\constraint\\stringcontains' => '/Framework/Constraint/StringContains.php',
'phpunit\\framework\\constraint\\stringendswith' => '/Framework/Constraint/StringEndsWith.php',
'phpunit\\framework\\constraint\\stringmatchesformatdescription' => '/Framework/Constraint/StringMatchesFormatDescription.php',
'phpunit\\framework\\constraint\\stringstartswith' => '/Framework/Constraint/StringStartsWith.php',
'phpunit\\framework\\constraint\\traversablecontains' => '/Framework/Constraint/TraversableContains.php',
'phpunit\\framework\\constraint\\traversablecontainsequal' => '/Framework/Constraint/TraversableContainsEqual.php',
'phpunit\\framework\\constraint\\traversablecontainsidentical' => '/Framework/Constraint/TraversableContainsIdentical.php',
'phpunit\\framework\\constraint\\traversablecontainsonly' => '/Framework/Constraint/TraversableContainsOnly.php',
'phpunit\\framework\\coveredcodenotexecutedexception' => '/Framework/Exception/CoveredCodeNotExecutedException.php',
'phpunit\\framework\\dataprovidertestsuite' => '/Framework/DataProviderTestSuite.php',
'phpunit\\framework\\error\\deprecated' => '/Framework/Error/Deprecated.php',
'phpunit\\framework\\error\\error' => '/Framework/Error/Error.php',
'phpunit\\framework\\error\\notice' => '/Framework/Error/Notice.php',
'phpunit\\framework\\error\\warning' => '/Framework/Error/Warning.php',
'phpunit\\framework\\exception' => '/Framework/Exception/Exception.php',
'phpunit\\framework\\exceptionwrapper' => '/Framework/ExceptionWrapper.php',
'phpunit\\framework\\expectationfailedexception' => '/Framework/Exception/ExpectationFailedException.php',
'phpunit\\framework\\incompletetest' => '/Framework/IncompleteTest.php',
'phpunit\\framework\\incompletetestcase' => '/Framework/IncompleteTestCase.php',
'phpunit\\framework\\incompletetesterror' => '/Framework/Exception/IncompleteTestError.php',
'phpunit\\framework\\invalidargumentexception' => '/Framework/Exception/InvalidArgumentException.php',
'phpunit\\framework\\invalidcoverstargetexception' => '/Framework/Exception/InvalidCoversTargetException.php',
'phpunit\\framework\\invaliddataproviderexception' => '/Framework/Exception/InvalidDataProviderException.php',
'phpunit\\framework\\invalidparametergroupexception' => '/Framework/InvalidParameterGroupException.php',
'phpunit\\framework\\missingcoversannotationexception' => '/Framework/Exception/MissingCoversAnnotationException.php',
'phpunit\\framework\\mockobject\\api' => '/Framework/MockObject/Api/Api.php',
'phpunit\\framework\\mockobject\\badmethodcallexception' => '/Framework/MockObject/Exception/BadMethodCallException.php',
'phpunit\\framework\\mockobject\\builder\\identity' => '/Framework/MockObject/Builder/Identity.php',
'phpunit\\framework\\mockobject\\builder\\invocationmocker' => '/Framework/MockObject/Builder/InvocationMocker.php',
'phpunit\\framework\\mockobject\\builder\\invocationstubber' => '/Framework/MockObject/Builder/InvocationStubber.php',
'phpunit\\framework\\mockobject\\builder\\match' => '/Framework/MockObject/Builder/Match.php',
'phpunit\\framework\\mockobject\\builder\\methodnamematch' => '/Framework/MockObject/Builder/MethodNameMatch.php',
'phpunit\\framework\\mockobject\\builder\\parametersmatch' => '/Framework/MockObject/Builder/ParametersMatch.php',
'phpunit\\framework\\mockobject\\builder\\stub' => '/Framework/MockObject/Builder/Stub.php',
'phpunit\\framework\\mockobject\\configurablemethod' => '/Framework/MockObject/ConfigurableMethod.php',
'phpunit\\framework\\mockobject\\configurablemethodsalreadyinitializedexception' => '/Framework/MockObject/Exception/ConfigurableMethodsAlreadyInitializedException.php',
'phpunit\\framework\\mockobject\\exception' => '/Framework/MockObject/Exception/Exception.php',
'phpunit\\framework\\mockobject\\generator' => '/Framework/MockObject/Generator.php',
'phpunit\\framework\\mockobject\\incompatiblereturnvalueexception' => '/Framework/MockObject/Exception/IncompatibleReturnValueException.php',
'phpunit\\framework\\mockobject\\invocation' => '/Framework/MockObject/Invocation.php',
'phpunit\\framework\\mockobject\\invocationhandler' => '/Framework/MockObject/InvocationHandler.php',
'phpunit\\framework\\mockobject\\matcher' => '/Framework/MockObject/Matcher.php',
'phpunit\\framework\\mockobject\\method' => '/Framework/MockObject/Api/Method.php',
'phpunit\\framework\\mockobject\\methodnameconstraint' => '/Framework/MockObject/MethodNameConstraint.php',
'phpunit\\framework\\mockobject\\mockbuilder' => '/Framework/MockObject/MockBuilder.php',
'phpunit\\framework\\mockobject\\mockclass' => '/Framework/MockObject/MockClass.php',
'phpunit\\framework\\mockobject\\mockmethod' => '/Framework/MockObject/MockMethod.php',
'phpunit\\framework\\mockobject\\mockmethodset' => '/Framework/MockObject/MockMethodSet.php',
'phpunit\\framework\\mockobject\\mockobject' => '/Framework/MockObject/MockObject.php',
'phpunit\\framework\\mockobject\\mocktrait' => '/Framework/MockObject/MockTrait.php',
'phpunit\\framework\\mockobject\\mocktype' => '/Framework/MockObject/MockType.php',
'phpunit\\framework\\mockobject\\mockedclonemethod' => '/Framework/MockObject/Api/MockedCloneMethod.php',
'phpunit\\framework\\mockobject\\rule\\anyinvokedcount' => '/Framework/MockObject/Rule/AnyInvokedCount.php',
'phpunit\\framework\\mockobject\\rule\\anyparameters' => '/Framework/MockObject/Rule/AnyParameters.php',
'phpunit\\framework\\mockobject\\rule\\consecutiveparameters' => '/Framework/MockObject/Rule/ConsecutiveParameters.php',
'phpunit\\framework\\mockobject\\rule\\invocationorder' => '/Framework/MockObject/Rule/InvocationOrder.php',
'phpunit\\framework\\mockobject\\rule\\invokedatindex' => '/Framework/MockObject/Rule/InvokedAtIndex.php',
'phpunit\\framework\\mockobject\\rule\\invokedatleastcount' => '/Framework/MockObject/Rule/InvokedAtLeastCount.php',
'phpunit\\framework\\mockobject\\rule\\invokedatleastonce' => '/Framework/MockObject/Rule/InvokedAtLeastOnce.php',
'phpunit\\framework\\mockobject\\rule\\invokedatmostcount' => '/Framework/MockObject/Rule/InvokedAtMostCount.php',
'phpunit\\framework\\mockobject\\rule\\invokedcount' => '/Framework/MockObject/Rule/InvokedCount.php',
'phpunit\\framework\\mockobject\\rule\\methodname' => '/Framework/MockObject/Rule/MethodName.php',
'phpunit\\framework\\mockobject\\rule\\parameters' => '/Framework/MockObject/Rule/Parameters.php',
'phpunit\\framework\\mockobject\\rule\\parametersrule' => '/Framework/MockObject/Rule/ParametersRule.php',
'phpunit\\framework\\mockobject\\runtimedxception' => '/Framework/MockObject/Exception/RuntimeException.php',
'phpunit\\framework\\mockobject\\stub' => '/Framework/MockObject/Stub.php',
'phpunit\\framework\\mockobject\\stub\\consecutivecalls' => '/Framework/MockObject/Stub/ConsecutiveCalls.php',
'phpunit\\framework\\mockobject\\stub\\exception' => '/Framework/MockObject/Stub/Exception.php',
'phpunit\\framework\\mockobject\\stub\\returnargument' => '/Framework/MockObject/Stub/ReturnArgument.php',
'phpunit\\framework\\mockobject\\stub\\returncallback' => '/Framework/MockObject/Stub/ReturnCallback.php',
'phpunit\\framework\\mockobject\\stub\\returnreference' => '/Framework/MockObject/Stub/ReturnReference.php',
'phpunit\\framework\\mockobject\\stub\\returnself' => '/Framework/MockObject/Stub/ReturnSelf.php',
'phpunit\\framework\\mockobject\\stub\\returnstub' => '/Framework/MockObject/Stub/ReturnStub.php',
'phpunit\\framework\\mockobject\\stub\\returnvaluemap' => '/Framework/MockObject/Stub/ReturnValueMap.php',
'phpunit\\framework\\mockobject\\stub\\stub' => '/Framework/MockObject/Stub/Stub.php',
'phpunit\\framework\\mockobject\\unmockedclonemethod' => '/Framework/MockObject/Api/UnmockedCloneMethod.php',
'phpunit\\framework\\mockobject\\verifiable' => '/Framework/MockObject/Verifiable.php',
'phpunit\\framework\\nochildtestsuiteexception' => '/Framework/Exception/NoChildTestSuiteException.php',
'phpunit\\framework\\outputerror' => '/Framework/Exception/OutputError.php',
'phpunit\\framework\\phptassertionfailederror' => '/Framework/Exception/PHPTAssertionFailedError.php',
'phpunit\\framework\\riskytesterror' => '/Framework/Exception/RiskyTestError.php',
'phpunit\\framework\\selfdescribing' => '/Framework/SelfDescribing.php',
'phpunit\\framework\\skippedtest' => '/Framework/SkippedTest.php',
'phpunit\\framework\\skippedtestcase' => '/Framework/SkippedTestCase.php',
'phpunit\\framework\\skippedtesterror' => '/Framework/Exception/SkippedTestError.php',
'phpunit\\framework\\skippedtestsuiteerror' => '/Framework/Exception/SkippedTestSuiteError.php',
'phpunit\\framework\\syntheticerror' => '/Framework/Exception/SyntheticError.php',
'phpunit\\framework\\syntheticskippederror' => '/Framework/Exception/SyntheticSkippedError.php',
'phpunit\\framework\\test' => '/Framework/Test.php',
'phpunit\\framework\\testbuilder' => '/Framework/TestBuilder.php',
'phpunit\\framework\\testcase' => '/Framework/TestCase.php',
'phpunit\\framework\\testfailure' => '/Framework/TestFailure.php',
'phpunit\\framework\\testlistener' => '/Framework/TestListener.php',
'phpunit\\framework\\testlistenerdefaultimplementation' => '/Framework/TestListenerDefaultImplementation.php',
'phpunit\\framework\\testresult' => '/Framework/TestResult.php',
'phpunit\\framework\\testsuite' => '/Framework/TestSuite.php',
'phpunit\\framework\\testsuiteiterator' => '/Framework/TestSuiteIterator.php',
'phpunit\\framework\\unintentionallycoveredcodeerror' => '/Framework/Exception/UnintentionallyCoveredCodeError.php',
'phpunit\\framework\\warning' => '/Framework/Exception/Warning.php',
'phpunit\\framework\\warningTestCase' => '/Framework/WarningTestCase.php',
'phpunit\\runner\\afterincompletetesthook' => '/Runner/Hook/AfterIncompleteTestHook.php',
'phpunit\\runner\\afterlasttesthook' => '/Runner/Hook/AfterLastTestHook.php',
'phpunit\\runner\\afterriskytesthook' => '/Runner/Hook/AfterRiskyTestHook.php',
'phpunit\\runner\\afterskippedtesthook' => '/Runner/Hook/AfterSkippedTestHook.php',
'phpunit\\runner\\aftersuccessfultesthook' => '/Runner/Hook/AfterSuccessfulTestHook.php',
'phpunit\\runner\\aftertesterrorhook' => '/Runner/Hook/AfterTestErrorHook.php',
'phpunit\\runner\\aftertestfailurehook' => '/Runner/Hook/AfterTestFailureHook.php',
'phpunit\\runner\\aftertesthook' => '/Runner/Hook/AfterTestHook.php',
'phpunit\\runner\\aftertestwarninghook' => '/Runner/Hook/AfterTestWarningHook.php',
'phpunit\\runner\\basetestrunner' => '/Runner/BaseTestRunner.php',
'phpunit\\runner\\beforefirsttesthHook' => '/Runner/Hook/BeforeFirstTestHook.php',
'phpunit\\runner\\beforetesthook' => '/Runner/Hook/BeforeTestHook.php',
'phpunit\\runner\\defaulttestresultcache' => '/Runner/DefaultTestResultCache.php',
'phpunit\\runner\\exception' => '/Runner/Exception.php',
'phpunit\\runner\\filter\\excludegroupfilteriterator' => '/Runner/Filter/ExcludeGroupFilterIterator.php',
'phpunit\\runner\\filter\\factory' => '/Runner/Filter/Factory.php',
'phpunit\\runner\\filter\\groupfilteriterator' => '/Runner/Filter/GroupFilterIterator.php',
'phpunit\\runner\\filter\\includegroupfilteriterator' => '/Runner/Filter/IncludeGroupFilterIterator.php',
'phpunit\\runner\\filter\\namefilteriterator' => '/Runner/Filter/NameFilterIterator.php',
'phpunit\\runner\\hook' => '/Runner/Hook/Hook.php',
'phpunit\\runner\\nulltestresultcache' => '/Runner/NullTestResultCache.php',
'phpunit\\runner\\phpttestcase' => '/Runner/PhptTestCase.php',
'phpunit\\runner\\resultcacheextension' => '/Runner/ResultCacheExtension.php',
'phpunit\\runner\\standardtestsuiteloader' => '/Runner/StandardTestSuiteLoader.php',
'phpunit\\runner\\testhook' => '/Runner/Hook/TestHook.php',
'phpunit\\runner\\testlisteneradapter' => '/Runner/Hook/TestListenerAdapter.php',
'phpunit\\runner\\testresultcache' => '/Runner/TestResultCache.php',
'phpunit\\runner\\testsuiteloader' => '/Runner/TestSuiteLoader.php',
'phpunit\\runner\\testsuitesorter' => '/Runner/TestSuiteSorter.php',
'phpunit\\runner\\version' => '/Runner/Version.php',
'phpunit\\textUI\\command' => '/TextUI/Command.php',
'phpunit\\textUI\\exception' => '/TextUI/Exception.php',
'phpunit\\textUI\\help' => '/TextUI/Help.php',
'phpunit\\textUI\\resultprinter' => '/TextUI/ResultPrinter.php',
'phpunit\\textUI\\testrunner' => '/TextUI/TestRunner.php',
'phpunit\\util\\annotation\\docblock' => '/Util/Annotation/DocBlock.php',
'phpunit\\util\\annotation\\registry' => '/Util/Annotation/Registry.php',
'phpunit\\util\\blacklist' => '/Util/Blacklist.php',
'phpunit\\util\\color' => '/Util/Color.php',
'phpunit\\util\\configuration' => '/Util/Configuration.php',
'phpunit\\util\\configurationgenerator' => '/Util/ConfigurationGenerator.php',
'phpunit\\util\\errorhandler' => '/Util/ErrorHandler.php',
'phpunit\\util\\exception' => '/Util/Exception.php',
'phpunit\\util\\fileloader' => '/Util/FileLoader.php',
'phpunit\\util\\filesystem' => '/Util/Filesystem.php',
'phpunit\\util\\filter' => '/Util/Filter.php',
'phpunit\\util\\getopt' => '/Util/Getopt.php',
'phpunit\\util\\globalstate' => '/Util/GlobalState.php',
'phpunit\\util\\invaliddatasetexception' => '/Util/InvalidDataSetException.php',
'phpunit\\util\\json' => '/Util/Json.php',
'phpunit\\util\\log\\junit' => '/Util/Log/JUnit.php',
'phpunit\\util\\log\\teamcity' => '/Util/Log/TeamCity.php',
'phpunit\\util\\php\\abstractphpprocess' => '/Util/PHP/AbstractPhpProcess.php',
'phpunit\\util\\php\\defaultphpprocess' => '/Util/PHP/DefaultPhpProcess.php',
'phpunit\\util\\php\\windowsphpprocess' => '/Util/PHP/WindowsPhpProcess.php',
'phpunit\\util\\printer' => '/Util/Printer.php',
'phpunit\\util\\regularexpression' => '/Util/RegularExpression.php',
'phpunit\\util\\teest' => '/Util/Test.php',
'phpunit\\util\\testdox\\clitestdoxprinter' => '/Util/TestDox/CliTestDoxPrinter.php',
'phpunit\\util\\testdox\\htmlresultprinter' => '/Util/TestDox/HtmlResultPrinter.php',
'phpunit\\util\\testdox\\nameprettifier' => '/Util/TestDox/NamePrettifier.php',
'phpunit\\util\\testdox\\resultprinter' => '/Util/TestDox/ResultPrinter.php',
'phpunit\\util\\testdox\\testdoxprinter' => '/Util/TestDox/TestDoxPrinter.php',
'phpunit\\util\\testdox\\textresultprinter' => '/Util/TestDox/TextResultPrinter.php',
'phpunit\\util\\testdox\\xmlresultprinter' => '/Util/TestDox/XmlResultPrinter.php',
'phpunit\\util\\texttestlistrenderer' => '/Util/TextTestListRenderer.php',
'phpunit\\util\\type' => '/Util/Type.php',
'phpunit\\util\\xdebugfilterscriptgenerator' => '/Util/XdebugFilterScriptGenerator.php',
'phpunit\\util\\xml' => '/Util/Xml.php',
'phpunit\\util\\xmltestlistrenderer' => '/Util/XmlTestListRenderer.php',
],
  "${include_dir}/PHPUnit"
);

// Dependencies
\Fedora\Autoloader\Dependencies::required([
  "${include_dir}/File/Iterator/autoload.php",
  "${include_dir}/PHP/CodeCoverage/autoload.php",
  "${include_dir}/PHP/Timer/autoload.php",
  "${include_dir}/SebastianBergmann/Version/autoload.php",
  "${include_dir}/SebastianBergmann/Diff/autoload.php",
  "${include_dir}/SebastianBergmann/Environment/autoload.php",
  "${include_dir}/SebastianBergmann/Exporter/autoload.php",
  "${include_dir}/SebastianBergmann/GlobalState/autoload.php",
  "${include_dir}/SebastianBergmann/Comparator/autoload.php",
  "${include_dir}/SebastianBergmann/ObjectEnumerator/autoload.php",
  "${include_dir}/SebastianBergmann/ResourceOperations/autoload.php",
  "${include_dir}/SebastianBergmann/Type/autoload.php",
  "${include_dir}/SebastianBergmann/Version/autoload.php",
  "${include_dir}/Symfony/Component/Yaml/autoload.php",
  "${include_dir}/Text/Template/autoload.php",
  "${include_dir}/myclabs/DeepCopy/autoload.php",
  "${include_dir}/PHPUnit/Framework/MockObject/autoload.php",
  "${include_dir}/phpspec/Prophecy/autoload.php",
  "${include_dir}/Doctrine/Instantiator/autoload.php",
  "${include_dir}/PharIo/Manifest/autoload.php",
  "${include_dir}/PharIo/Version/autoload.php",
]);

